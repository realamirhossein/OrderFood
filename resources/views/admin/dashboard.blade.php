@extends('layouts.admin')

@section('content')

    @include('inc.messages')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{ $users }}</h3>

                        <p>کاربران</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-user-plus"></i>
                    </div>
                    <a href="{{ route('users.index') }}" class="small-box-footer">مشاهده کاربران<i class="fa fa-arrow-circle-left"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>{{ $orders }}</h3>

                        <p>سفارش ها</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-building"></i>
                    </div>
                    <a href="{{ route('orders.index') }}" class="small-box-footer">مشاهده سفارش ها<i class="fa fa-arrow-circle-left"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>{{ $foods }}</h3>

                        <p>غذاها</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-envelope"></i>
                    </div>
                    <a href="{{ route('foods.index') }}" class="small-box-footer">مشاهده غذاها ها <i class="fa fa-arrow-circle-left"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>{{ 3 }}</h3>

                        <p>منوها</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-file "></i>
                    </div>
                    <a href="{{ route('menus.index') }}" class="small-box-footer">مشاهده منوها<i class="fa fa-arrow-circle-left"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header no-border">
                        <div class="d-flex justify-content-between">
                            <h3 class="card-title">Reports</h3>
                            <a href="javascript:void(0);">مشاهده گزارش</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="text-center">Under Development</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header no-border">
                        <div class="d-flex justify-content-between">
                            <h3 class="card-title">Reports</h3>
                            <a href="javascript:void(0);">مشاهده گزارش</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="text-center">Under Development</p>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.container-fluid -->


@endsection
