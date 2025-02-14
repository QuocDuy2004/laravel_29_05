@extends('layouts.appadmin')
@section('title', 'Edit Category')

@section('content')
    <!-- ! Hide app brand if navbar-full -->
        <!-- Content wrapper -->
        <div class="content-wrapper">

            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">

                <h4 class="py-3 mb-4"><span class="text-muted fw-light">@yield('title')</span></h4>

                <!-- Basic Layout -->
                <div class="row">
                    <div class="col-xl">
                        <div class="card mb-4">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">Basic Layout</h5> <small class="text-muted float-end">Default
                                    label</small>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="form-floating form-floating-outline mb-4">
                                        <input type="text" class="form-control" id="basic-default-fullname"
                                            placeholder="John Doe">
                                        <label for="basic-default-fullname">Full Name</label>
                                    </div>
                                    <div class="form-floating form-floating-outline mb-4">
                                        <input type="text" class="form-control" id="basic-default-company"
                                            placeholder="ACME Inc.">
                                        <label for="basic-default-company">Company</label>
                                    </div>
                                    <div class="mb-4">
                                        <div class="input-group input-group-merge">
                                            <div class="form-floating form-floating-outline">
                                                <input type="text" id="basic-default-email" class="form-control"
                                                    placeholder="john.doe" aria-label="john.doe"
                                                    aria-describedby="basic-default-email2">
                                                <label for="basic-default-email">Email</label>
                                            </div>
                                            <span class="input-group-text" id="basic-default-email2">@example.com</span>
                                        </div>
                                        <div class="form-text"> You can use letters, numbers &amp; periods
                                        </div>
                                    </div>
                                    <div class="form-floating form-floating-outline mb-4">
                                        <input type="text" id="basic-default-phone" class="form-control phone-mask"
                                            placeholder="658 799 8941">
                                        <label for="basic-default-phone">Phone No</label>
                                    </div>
                                    <div class="form-floating form-floating-outline mb-4">
                                        <textarea id="basic-default-message" class="form-control" placeholder="Hi, Do you have a moment to talk Joe?"
                                            style="height: 60px;"></textarea>
                                        <label for="basic-default-message">Message</label>
                                    </div>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Send</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Merged -->
                    <div class="col-xl">
                        <div class="card mb-4">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">Basic with Icons</h5>
                                <small class="text-muted float-end">Merged input group</small>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="input-group input-group-merge mb-4">
                                        <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                                class="mdi mdi-account-outline"></i></span>
                                        <input type="text" class="form-control" id="basic-icon-default-fullname"
                                            placeholder="Full Name" aria-label="Full Name"
                                            aria-describedby="basic-icon-default-fullname2">
                                    </div>
                                    <div class="input-group input-group-merge mb-4">
                                        <span id="basic-icon-default-company2" class="input-group-text"><i
                                                class="mdi mdi-office-building-outline"></i></span>
                                        <input type="text" id="basic-icon-default-company" class="form-control"
                                            placeholder="Company" aria-label="Company"
                                            aria-describedby="basic-icon-default-company2">
                                    </div>
                                    <div class="mb-4">
                                        <div class="input-group input-group-merge">
                                            <span class="input-group-text"><i class="mdi mdi-email-outline"></i></span>
                                            <input type="text" id="basic-icon-default-email" class="form-control"
                                                placeholder="Email" aria-label="Email"
                                                aria-describedby="basic-icon-default-email2">
                                            <span id="basic-icon-default-email2"
                                                class="input-group-text">@example.com</span>
                                        </div>
                                        <div class="form-text"> You can use letters, numbers &amp; periods
                                        </div>
                                    </div>
                                    <div class="input-group input-group-merge mb-4">
                                        <span id="basic-icon-default-phone2" class="input-group-text"><i
                                                class="mdi mdi-phone"></i></span>
                                        <input type="text" id="basic-icon-default-phone"
                                            class="form-control phone-mask" placeholder="Phone No" aria-label="Phone No"
                                            aria-describedby="basic-icon-default-phone2">
                                    </div>
                                    <div class="input-group input-group-merge mb-4">
                                        <span id="basic-icon-default-message2" class="input-group-text"><i
                                                class="mdi mdi-message-outline"></i></span>
                                        <textarea id="basic-icon-default-message" class="form-control" placeholder="Message" aria-label="Message"
                                            aria-describedby="basic-icon-default-message2" style="height: 60px;"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Send</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        @endsection
