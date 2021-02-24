@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Orders</h3>
        </div>
        <div class="card-body p-0" style="display: block;">
            <table class="table table-striped projects">
                <thead>
                <tr>
                    <th >
                        Order Number
                    </th>
                    <th >
                        Details
                    </th>
                    <th >
                        Qty
                    </th>

                    <th >
                        Order Date
                    </th>

                    <th >
                        Status
                    </th>
                    <th style="width: 10%">
                    </th>

                </tr>
                </thead>
                <tbody>
                @forelse($user_orders as $order)
                    <tr>
                        <td>
                            {{ $order->id }}
                        </td>
                        <td>
                            <a>
                                {{ $order->food->name }}
                            </a>
                        </td>
                        <td>
                            <p class="text text-sm">
                                {{ $order->qty}}
                            </p>
                        </td>
                        {{--                        <td>--}}
                        {{--                            <p class="text text-sm">--}}
                        {{--                                {{ $letter->letter_from }}</p>--}}
                        {{--                        </td>--}}

                        <td>
                            <span>
                                <p class="text text-sm">
                                    {{ $order->created_at->format('Y-m-d H:i:s') }}
                                </p>
                            </span>
                        </td>


                        <td>
                            <p class="text text-sm">
                                {{ $order->status->name }}
                            </p>
                        </td>

                        <td>
                            <a class="btn btn-info btn-sm" href="{{ route('showUserOrder', $order->id) }}">
                                <i class="fa fa-pencil">
                                </i>
                                Order Details
                            </a>
                        </td>


                    </tr>
                @empty
                    <p>No Orders</p>

                @endforelse
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    </div>
@endsection
