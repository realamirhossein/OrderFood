@extends('layouts.admin')

@section('content')
    @include('inc.messages')


    <div class="card card-info">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <h3 class="card-title">ویرایش سفارش {{ $order->id }}</h3>
            </div>
        </div>

        <form class="form-horizontal" id="update-order-status-form" method="post" action="{{ route('orders.update', $order) }}">
            @csrf
            @method('put')
            <fieldset>

                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group m-b-lg">
                            <label class="control-label col-lg-3">User</label>
                            <div class="col-lg-8">
                                <div class="line-up-form">{{ $order->user->first_name .' '. $order->user->last_name }}</div>
                            </div> <!-- /controls -->
                        </div> <!-- /form-group -->



                        <div class="form-group m-b-lg">
                            <label class="control-label col-lg-3">Food Name</label>
                            <div class="col-lg-8">
                                <div class="line-up-form">{{ $order->food->name }}</div>
                            </div> <!-- /controls -->
                        </div> <!-- /form-group -->

                    </div>
                    <div class="col-sm-4">
                        <div class="form-group m-b-lg">
                            <label class="control-label col-lg-3">Quantity</label>
                            <div class="col-lg-8">
                                <div class="line-up-form">{{ $order->qty }}</div>
                            </div> <!-- /controls -->
                        </div> <!-- /form-group -->

                        <div class="form-group">
                            <label for="status_id" class="control-label col-lg-3">Order Status</label>
                            <div class="controls col-lg-8">

                                <select name="status_id" id="status_id" class="dropdown-style input-field input-normal">
                                    @foreach ($statuses as $status)
                                        <option value="{{ $status->id}}" {{ (old("status", $currentStatus) == $status->id ? "selected":"") }}>{{ $status->name }}</option>
                                    @endforeach
                                </select>

                            </div> <!-- /controls -->
                        </div> <!-- /form-group -->



                        <div class="form-group">
                            <div class="col-lg-3"></div>
                            <div class="controls col-lg-8">
                                <div class="form-actions">
                                    <button type="submit" id="update-order" class="btn btn-success">Update Status</button>
                                </div> <!-- /form-actions -->
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group m-b-lg">
                            <label class="control-label col-lg-3">تاریخ</label>
                            <div class="col-lg-8">
                                <div class="line-up-form">{{ $order->created_at }}</div>
                            </div> <!-- /controls -->
                        </div> <!-- /form-group -->
                        <div class="form-group m-b-lg">
                            <label class="control-label col-lg-3">تاریخ ویرایش</label>
                            <div class="col-lg-8">
                                <div class="line-up-form">{{ $order->updated_at }}</div>
                            </div> <!-- /controls -->
                        </div> <!-- /form-group -->
                    </div>


                </div>


            </fieldset>
        </form>
    </div>
    <!-- /.end card -->

@endsection

