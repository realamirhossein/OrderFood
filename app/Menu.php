<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'subname',
    ];

    /**
     * Get the food of the menu.
     */
    public function foods()
    {
        return $this->hasMany(Food::class);
    }
}
