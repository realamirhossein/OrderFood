<?php

namespace App\Http\Controllers;

use App\Food;
use App\Menu;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShopController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $pagination = 9;
        $menus = Menu::all();

        if (request()->menu) {
            $foods = Food::with('menu')->whereHas('menu', function ($query) {
                $query->where('name', request()->menu);
            });
            $menuName = optional($menus->where('name', request()->menu)->first())->name;
        }else {
            $foods = Food::orderBy('created_at', 'DESC');
            $menuName = '';
        }

        $foods = $foods->paginate($pagination);

        return view('shop.index')->with([
            'foods' => $foods,
            'menus' => $menus,
            'menuName' => $menuName,
        ]);
    }

}
