<?php

namespace App\Http\Controllers;

use App\Food;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserOrderController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Food $food)
    {
        if ($food->qty < 1) {
            return back()->with('error', 'Out of stock!');
        } else {
            $order = Order::create([
                'user_id' => Auth()->user()->id,
                'food_id' => $food->id,
                'status_id' => 1,
                'qty' => 1,
                'total' => $food->price,
            ]);
            $food->decrement('qty', 1);

            return redirect()->route('showUserOrder', $order)->with('success', 'Order received!');
        }
    }

    public function show(Order $order)
    {
        return view('order.show', compact('order'));
    }

    public function index(){
        $user_orders = Auth()->user()->orders;
        return view('order.history', compact('user_orders'));
    }


}
