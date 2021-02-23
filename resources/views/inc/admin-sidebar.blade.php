<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin.dashboard') }}" class="brand-link">
{{--        <img src="{{ asset('/img/logo.png') }}" alt="Logo" class="brand-image img-circle elevation-3"--}}
{{--             style="opacity: 1.2">--}}
        <span class="brand-text font-weight-light">پنل مدیریت</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <div>
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{ asset('/img/default.png') }}"
                         class="img-circle elevation-2 user-logo" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">{{ auth()->user()->first_name .' '. auth()->user()->last_name}}</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item has-treeview {{ ( Route::is('users.index') ? 'menu-open'  : '' )}}">
                        <a href="#"
                           class="nav-link {{ ( Route::is('users.index') ? 'active'  : '' )}}">
                            <i class="nav-icon fa fa-users"></i>
                            <p>
                                کاربران
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('users.index') }}"
                                   class="nav-link {{ Route::is('users.index') ? 'active' : '' }}">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>مشاهده کاربران</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Orders Nav links -->
                    <li class="nav-item has-treeview {{ ( Route::is('orders.index')? 'menu-open'  : '' )}}">
                        <a href="#" class="nav-link {{ ( Route::is('orders.index') ? 'active'  : '' )}}">
                            <i class="nav-icon fa fa-file"></i>
                            <p>
                                سفارش ها
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('orders.index') }}"
                                   class="nav-link {{ Route::is('orders.index') ? 'active' : '' }}">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>مشاهده سفارشات</p>
                                </a>
                            </li>
                        </ul>
                    </li>


                    <!-- Statuses Nav links -->
                    <li class="nav-item has-treeview {{ Route::is('statuses.index')? 'menu-open'  : ''}}">
                        <a href="#" class="nav-link {{ Route::is('statuses.index') ? 'active'  : ''}}">
                            <i class="nav-icon fa fa-file"></i>
                            <p>
                                وضعیت سفارشات
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('statuses.index') }}"
                                   class="nav-link {{ Route::is('statuses.index') ? 'active' : '' }}">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>وضعیت سفارش ها</p>
                                </a>
                            </li>
                        </ul>
                    </li>


                    <!-- Menus Nav links -->
                    <li class="nav-item has-treeview {{ Route::is('menus.index')? 'menu-open'  : ''}}">
                        <a href="#" class="nav-link {{ Route::is('menus.index') ? 'active'  : ''}}">
                            <i class="nav-icon fa fa-file"></i>
                            <p>
                                منوهای غذایی
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('menus.index') }}"
                                   class="nav-link {{ Route::is('menus.index') ? 'active' : '' }}">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>منوها</p>
                                </a>
                            </li>
                        </ul>
                    </li>


                    <!-- Menus Nav links -->
                    <li class="nav-item has-treeview {{ Route::is('foods.index')? 'menu-open'  : ''}}">
                        <a href="#" class="nav-link {{ Route::is('foods.index') ? 'active'  : ''}}">
                            <i class="nav-icon fa fa-file"></i>
                            <p>
                                غذاهای رستوران
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('foods.index') }}"
                                   class="nav-link {{ Route::is('foods.index') ? 'active' : '' }}">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>غذاها</p>
                                </a>
                            </li>
                        </ul>
                    </li>

{{--                    <li class="nav-item">--}}
{{--                        <a href="{{ url('/change-password') }}"--}}
{{--                           class="nav-link  {{ Request::is('change-password') ? 'active' : '' }}">--}}
{{--                            <i class="nav-icon fa fa-key"></i>--}}
{{--                            <p>--}}
{{--                                تغییر رمزعبور--}}
{{--                            </p>--}}
{{--                        </a>--}}
{{--                    </li>--}}
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
    </div>
    <!-- /.sidebar -->
</aside>
