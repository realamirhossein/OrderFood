<?php

namespace App\Http\Controllers;

use App\Food;
use App\Menu;
use App\Order;
use App\Status;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
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

    public function dashboard(){
        $users = User::get()->count();
        $orders = Order::get()->count();
        $foods = Menu::get()->count();

        return view('admin.dashboard',compact('users','orders','foods'));
    }

    public function users()
    {
        $users = User::paginate(20);
        return view('admin.users.index',compact('users'));
    }

    public function orders()
    {
        $orders = Order::paginate(20);
        return view('admin.orders.index',compact('orders'));
    }

    public function statuses()
    {
        $statuses = Status::paginate(20);
        return view('admin.statuses.index',compact('statuses'));
    }

    public function menus()
    {
        $menus = Menu::paginate(20);
        return view('admin.menus.index',compact('menus'));
    }

    public function foods()
    {
        $foods = Food::paginate(20);
        return view('admin.foods.index',compact('foods'));
    }

    public function createFood()
    {
        $menus = Menu::all();
        return view('admin.foods.create', compact('menus'));
    }

    public function createMenu()
    {
        return view('admin.menus.create');
    }

    public function createStatus()
    {
        return view('admin.statuses.create');
    }


    public function editFood(Food $food)
    {
        return view('admin.foods.edit',compact('food'));
    }

    public function editStatus(Status $status)
    {
        return view('admin.statuses.edit',compact('status'));
    }

    public function editMenu(Menu $menu)
    {
        return view('admin.menus.edit',compact('menu'));
    }

    public function editOrder(Order $order)
    {
        $statuses = Status::all();
        $currentStatus = $order->status_id;
        return view('admin.orders.edit',compact('order', 'statuses', 'currentStatus'));
    }

    public function editUser(User $user)
    {
        return view('admin.users.edit',compact('user'));
    }

    public function storeFood(Request $request){
        $attributes = $request->validate([
            'name' => 'required|min:2|max:31|string',
            'menu_id' => 'required|numeric',
            'price' => 'required',
            'qty' => 'required|numeric',
            'img' => 'nullable'
        ]);

        Food::create($attributes);
        return back()->with('success', 'Food created!');
    }

    public function storeMenu(Request $request){
        $attributes = $request->validate([
            'name' => 'required',
        ]);

        Menu::create($attributes);
        return back()->with('success', 'Menu created!');
    }

    public function storeStatus(Request $request){
        $attributes = $request->validate([
            'name' => 'required',
            'percent' => 'required|numeric',
        ]);

        Status::create($attributes);
        return back()->with('success', 'Status created!');
    }

    public function updateOrder(Order $order, Request $request){
        $request->validate([
            'status_id' => 'required|numeric',
        ]);

        $order->status_id = $request->status_id;
        $order->save();

//        event(new OrderStatusChanged($order));

        return back()->with('success', 'Order Status updated successfully!');
    }


    public function updateUser(Request $request, User $user)
    {
        $attributes = $request->validate([
            'first_name' => ['required', 'string', 'max:15', 'min:3'],
            'last_name' => ['required', 'string', 'max:31', 'min:3'],
            'username' => ['required', 'string', 'max:31', 'unique:users,username,' . $user->id . ',id'],
            'email' => ['nullable', 'string', 'email', 'max:31', 'min:4', 'unique:users,email,' . $user->id . ',id'],
            'password' => ['sometimes', 'nullable', 'string', 'min:4', 'max:64', 'confirmed'],
        ]);

        $attributes['isadmin'] = ($request->input('isadmin') == 'on') ? 1 : 0;

        if (strlen($request->password) < 32) {
            $attributes['password'] = Hash::make($request->input('password'));
            $user->update($attributes);
        }

        $user->update($attributes);
        return back()->with('success', 'User updated!');
    }



    public function updateFood(Food $food, Request $request){
        $attributes = $request->validate([
            'name' => 'required|min:2|max:31|string',
            'menu_id' => 'required|numeric',
            'price' => 'required',
            'qty' => 'required|numeric',
            'img' => 'nullable'
        ]);

        $food->update($attributes);
        return back()->with('success', 'Food updated!');
    }

    public function updateStatus(Status $status, Request $request)
    {
        $attributes = $request->validate([
            'name' => 'required',
            'percent' => 'required|numeric',
        ]);

        Status::update($attributes);
        return back()->with('success', 'Status updated!');
    }

    public function updateMenu(Menu $menu, Request $request)
    {
        $attributes = $request->validate([
            'name' => 'required',
        ]);

        Menu::update($attributes);
        return back()->with('success', 'Menu updated!');
    }

    public function deleteFood(Food $food)
    {
        Storage::delete('public/' . $food->img);
        $food->delete();
        return back()->with('success', 'Food deleted.');
    }

    public function deleteMenu(Menu $menu)
    {
        $menu->delete();
        return back()->with('success', 'Menu deleted.');
    }

    public function deleteStatus(Status $status)
    {
        $status->delete();
        return back()->with('success', 'Status deleted.');
    }

    public function deleteOrder(Order $order)
    {
        $order->delete();
        return back()->with('success', 'Order deleted.');
    }

    public function deleteUser(User $user)
    {
        $user->delete();
        return back()->with('success', 'User deleted.');
    }


}
