@extends('layouts.admin')


@section('extra-css')
@endsection

@section('content')
    @include('inc.messages')
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">سفارش ها</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="بستن">
                    <i class="fa fa-minus"></i></button>
            </div>
        </div>
        <div class="card-body p-0" style="display: block;">
            <table class="table table-striped projects">
                <thead>
                <tr>
                    <th style="width: 10%">
                        شماره
                    </th>
                    <th style="width: 10%">
                        نام غذا
                    </th>
                    <th style="width: 10%">
                        تعداد
                    </th>
                    <th style="width: 10%">
                        نام کاربر
                    </th>
                    <th style="width: 10%">
                        تاریخ
                    </th>
                    <th style="width: 10%">
                        تاریخ ویرایش
                    </th>
                    <th style="width: 10%" class="text-center">
                        منوی سفارش
                    </th>
                    <th style="width: 10%" class="text-center">
                        وضعیت
                    </th>
                    <th style="width: 19%">
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($orders as $order)
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
                        <td class="text-right">
                            <p class=" text-sm" id="date">
                                {{ $order->user->first_name .' '.$order->user->last_name }}
                            </p>
                        </td>
                        <td>
                            <span>
                                <p class="text text-sm">
                                    {{ $order->created_at->format('Y-m-d H:i:s') }}
                                </p>
                            </span>
                        </td>
                        <td>
                            <span>
                                <p class="text text-sm">
                                    {{ $order->updated_at->format('Y-m-d H:i:s') }}
                                </p>
                            </span>
                        </td>
                        <td>
                        <span>
                            <p class="text text-sm">
                                {{ $order->food->menu->name }}
                            </p>
                        </span>
                        </td>
                        <td>
                            <p class="text text-sm">
                                {{ $order->status->name }}
                            </p>
                        </td>
                        <td>

                                <a class="btn btn-info btn-sm" href="{{ route('orders.edit', $order->id) }}">
                                    <i class="fa fa-pencil">
                                    </i>
                                    ویرایش
                                </a>
                                <a class="btn btn-danger btn-sm"
                                   href="{{ route('orders.delete', $order->id) }}" onclick="event.preventDefault();
                                     document.getElementById('delete-order-form').submit();">
                                    <i class="fa fa-trash">
                                    </i>
                                    حذف
                                </a>
                                <form id="delete-order-form"
                                      action="{{ route('orders.delete', $order->id) }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
@endsection
