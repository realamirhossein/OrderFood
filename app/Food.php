<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'price',
        'description',
        'qty',
        'img',
        'menu_id',
    ];

    /**
     * Get the menu of the shop.
     */
    public function menu()
    {
        return $this->belongsTo(Menu::class, 'menu_id');
    }

}
