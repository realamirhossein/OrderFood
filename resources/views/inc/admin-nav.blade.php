<!-- Navbar -->
<nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link sidebar-toggle" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ url('admin/dashboard') }}" class="nav-link">داشبورد</a>
        </li>
        {{--        <li class="nav-item d-none d-sm-inline-block">--}}
        {{--            <a href="#" class="nav-link">تماس</a>--}}
        {{--        </li>--}}
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="جستجو" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav mr-auto">
        <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <img src="{{ asset('/img/default.png') }}" class="user-image ml-1 user-logo"
                     alt="User Image">
                <span class="hidden-xs">{{ auth()->user()->first_name .' '. auth()->user()->last_name}}</span>
            </a>
            <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                    <img src="{{ asset('/img/default.png') }}" class="img-circle user-logo"
                         alt="User Image">

                    <p>
                        {{ auth()->user()->first_name .' '. auth()->user()->last_name}}
                    </p>


                <!-- Menu Footer-->
                <li class="user-footer">
                    <div class="pull-left">
                        <a href="{{ url('/change-password') }}" class="btn btn-default btn-flat">پروفایل</a>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-default btn-flat" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            {{ __('خروج از سیستم') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </li>
    </ul>
    <!-- Right navbar links -->


</nav>
<!-- /.navbar -->
