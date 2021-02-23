@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <h5 class="card-header">Order Tracker</h5>
            <div class="card-body">
{{--                <order-progress status="{{ $order->status->name}}" initial=" {{ $order->status->percent }}" order_id="{{ $order->id }}"></order-progress>--}}

{{--                <order-alert user_id="{{ auth()->user()->id }}"></order-alert>--}}

                <hr>
                <strong>Order ID:</strong> {{ $order->id }} <br>
                    <strong>Total:</strong> {{ $order->total }}$<br>

                <a href="{{ route('showUserOrderHistory') }}" class="btn btn-success">Back to Orders</a>
            </div>
        </div>
    </div>
@endsection
