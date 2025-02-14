<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme" data-bg-class="bg-menu-theme">

    <!-- ! Hide app brand if navbar-full -->
    <div class="app-brand demo">
        <a href="{{ route('admin.dashboard.index') }}" class="app-brand-link">
            <span class="app-brand-logo demo me-1">
                <span style="color:#9055FD;">
                    <svg width="30" height="20" viewBox="0 0 250 196" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M12.3002 1.25469L56.655 28.6432C59.0349 30.1128 60.4839 32.711 60.4839 35.5089V160.63C60.4839 163.468 58.9941 166.097 56.5603 167.553L12.2055 194.107C8.3836 196.395 3.43136 195.15 1.14435 191.327C0.395485 190.075 0 188.643 0 187.184V8.12039C0 3.66447 3.61061 0.0522461 8.06452 0.0522461C9.56056 0.0522461 11.0271 0.468577 12.3002 1.25469Z"
                            fill="currentColor"></path>
                        <path opacity="0.077704" fill-rule="evenodd" clip-rule="evenodd"
                            d="M0 65.2656L60.4839 99.9629V133.979L0 65.2656Z" fill="black"></path>
                        <path opacity="0.077704" fill-rule="evenodd" clip-rule="evenodd"
                            d="M0 65.2656L60.4839 99.0795V119.859L0 65.2656Z" fill="black"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M237.71 1.22393L193.355 28.5207C190.97 29.9889 189.516 32.5905 189.516 35.3927V160.631C189.516 163.469 191.006 166.098 193.44 167.555L237.794 194.108C241.616 196.396 246.569 195.151 248.856 191.328C249.605 190.076 250 188.644 250 187.185V8.09597C250 3.64006 246.389 0.027832 241.935 0.027832C240.444 0.027832 238.981 0.441882 237.71 1.22393Z"
                            fill="currentColor"></path>
                        <path opacity="0.077704" fill-rule="evenodd" clip-rule="evenodd"
                            d="M250 65.2656L189.516 99.8897V135.006L250 65.2656Z" fill="black"></path>
                        <path opacity="0.077704" fill-rule="evenodd" clip-rule="evenodd"
                            d="M250 65.2656L189.516 99.0497V120.886L250 65.2656Z" fill="black"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M12.2787 1.18923L125 70.3075V136.87L0 65.2465V8.06814C0 3.61223 3.61061 0 8.06452 0C9.552 0 11.0105 0.411583 12.2787 1.18923Z"
                            fill="currentColor"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M12.2787 1.18923L125 70.3075V136.87L0 65.2465V8.06814C0 3.61223 3.61061 0 8.06452 0C9.552 0 11.0105 0.411583 12.2787 1.18923Z"
                            fill="white" fill-opacity="0.15"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M237.721 1.18923L125 70.3075V136.87L250 65.2465V8.06814C250 3.61223 246.389 0 241.935 0C240.448 0 238.99 0.411583 237.721 1.18923Z"
                            fill="currentColor"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M237.721 1.18923L125 70.3075V136.87L250 65.2465V8.06814C250 3.61223 246.389 0 241.935 0C240.448 0 238.99 0.411583 237.721 1.18923Z"
                            fill="white" fill-opacity="0.3"></path>
                    </svg>
                </span>
            </span>
            <span class="app-brand-text demo menu-text fw-semibold ms-2">Duy Media</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="mdi menu-toggle-icon d-xl-block align-middle mdi-20px"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1 ps ps--active-y">








        <li class="menu-item active open">
            <a href="#" class="menu-link menu-toggle waves-effect">
                <i class="menu-icon tf-icons mdi mdi-home-outline"></i>
                <div>Dashboards</div>
                <div class="badge bg-danger rounded-pill ms-auto">5</div>

            </a>


            <ul class="menu-sub">
















                <li class="menu-item ">
                    <a href="#" class="menu-link">
                        <div>Cấu hình hệ thống</div>
                    </a>
                </li>
            </ul>
        </li>








        <li class="menu-item ">
            <a href="javascript:void(0);" class="menu-link menu-toggle waves-effect">
                <i class="menu-icon tf-icons mdi mdi-window-maximize"></i>
                <div>Sản phẩm</div>
            </a>


            <ul class="menu-sub">

                <li class="menu-item ">
                    <a href="{{ route('admin.product.index') }}" class="menu-link">
                        <div>Quản lý sản phẩm</div>
                    </a>


                </li>
            </ul>
        </li>








        <li class="menu-item ">
            <a href="javascript:void(0);" class="menu-link menu-toggle waves-effect">
                <i class="menu-icon tf-icons mdi mdi-flip-to-front"></i>
                <div>Bài viết</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item ">
                    <a href="{{ route('admin.post.index') }}" class="menu-link">
                        <div>Quản lý bài viết</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item ">
            <a href="javascript:void(0);" class="menu-link menu-toggle waves-effect">
                <i class="mdi-cart tf-icons mdi"></i>
                <div>Đơn hàng</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item ">
                    <a href="{{ route('admin.order.index') }}" class="menu-link">
                        <div>Quản lý đơn hàng</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item ">
            <a href="javascript:void(0);" class="menu-link menu-toggle waves-effect">
                <i class="mdi-account tf-icons mdi"></i>
                <div>Thành viên</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item ">
                    <a href="{{ route('admin.user.index') }}" class="menu-link">
                        <div>Quản lý thành viên</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item ">
            <a href="{{ route('admin.orderdetail.index') }}" class="menu-link">
                <i class="mdi-shopping tf-icons mdi mdi-google-circles-extended"></i>
                <div>Giỏ hàng</div>
            </a>
        </li>

        <li class="menu-item ">
            <a href="{{ route('admin.contact.index') }}" class="menu-link">
                <i class="mdi-headphones tf-icons mdi mdi-google-circles-extended"></i>
                <div>Liên hệ</div>
            </a>
        </li>


        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
        </div>
        <div class="ps__rail-y" style="top: 0px; height: 631px; right: 4px;">
            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 261px;"></div>
        </div>
    </ul>

</aside>
