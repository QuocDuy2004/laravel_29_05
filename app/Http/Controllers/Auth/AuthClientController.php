<?php

namespace App\Http\Controllers\Auth;

use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use PhpParser\Node\Expr\Throw_;
use Illuminate\Validation\ValidationException;
use Throwable;

class AuthClientController extends Controller
{
    public function RegisterPage()
    {
        return view('Auth.register');
    }
    public function LoginPage()
    {
        return view('Auth.login');
    }
    public function LoginGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
    public function ForgotPage()
    {
        return view('Auth.forgot');
    }

    public function LoginGoogleCallback(Request $request)
    {
        try {
            $googleUser = Socialite::driver('google')->user();
            $existingUser = User::where('email', $googleUser->email)->first();

            if ($existingUser) {
                // Đăng nhập người dùng hiện có
                Auth::login($existingUser);
            } else {
                // Tạo người dùng mới
                $newUser = User::create([
                    'name' => $googleUser->name,
                    'email' => strtolower($googleUser->email),
                    'password' => Hash::make(Str::random(8)), // Tạo mật khẩu ngẫu nhiên
                    'username' => $googleUser->id, // Sử dụng Google ID làm tên đăng nhập
                ]);

                Auth::login($newUser);
            }

            return redirect()->route('home')->with('success', 'Đăng nhập thành công');
        } catch (\Exception $e) {
            return redirect()->route('login')->with('error', 'Đăng nhập bằng Google thất bại: ' . $e->getMessage());
        }
    }

    public function Login(Request $request)
    {

        $valid = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
        ]);

        if ($valid->fails()) {
            return redirect()->back()->withErrors($valid)->withInput();
        } else {
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
                return redirect()->route('home')->with('success', 'Đăng nhập thành công');
            } else {
                return redirect()->back()->with('error', 'Sai email hoặc mật khẩu')->withInput(['email' => $request->email]);
            }
        }
    }

    public function Register(Request $request)
    {
        $valid = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'phone' => ['required', 'string', 'max:255', 'unique:users,phone', 'regex:/^[0-9]{10,11}$/'],
            'username' => 'required|string|max:255|unique:users,username',
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required|string|min:8|same:password',
        ]);

        if ($valid->fails()) {
            return redirect()->back()->withErrors($valid)->withInput();
        }

        try {
            $newUser = User::create([
                'name' => $request->name,
                'username' => $request->username,
                'email' => strtolower($request->email),
                'phone' => strtolower($request->phone),
                'password' => Hash::make($request->password),
                'password_confirmation' => Hash::make($request->password_confirmation),
            ]);

            if ($newUser) {
                return redirect()->route('login')->with('success', 'Đăng ký thành công')->withInput(['username' => $request->username]);
            } else {
                return redirect()->back()->withErrors('error', 'Đăng ký thất bại')->withInput(['username' => $request->username]);
            }
        } catch (Throwable) {
            throw ValidationException::withMessages(['error' => 'Đăng ký thất bại. Hãy thử lại vài lần']);
        }
    }

    public function Logout(Request $request)
    {
        Session::flush();
        Auth::logout(Auth::user());
        return redirect()->route('login')->with('success', 'Bạn đã đăng xuất thành công.');
    }
}
