<?php

namespace App\Http\Controllers;

use App\Food;
use App\Menu;
use Illuminate\Http\Request;

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
        $pagination = 20;
        $menus = Menu::all();

        if (request()->menu) {
            $foods = Product::with('categories')->whereHas('categories', function ($query) {
                $query->where('name', request()->menu);
            });
            $menuName = optional($menus->where('name', request()->menu)->first())->name;
        }

        $foods = $foods->paginate($pagination);

        return view('food.index')->with([
            'foods' => $foods,
            'menus' => $menus,
            'menuName' => $menuName,
        ]);
    }
}
