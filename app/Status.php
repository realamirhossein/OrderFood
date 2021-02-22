<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'percent',
    ];

    /**
     * Get food with same status.
     */
    public function orders()
    {
        return $this->hasMany(Order::class);
    }

}
