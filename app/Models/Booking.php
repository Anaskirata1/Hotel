<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Booking extends Model
{
    protected $guarded = [];
    use HasFactory;


        // public function room1(): HasOne
        // {
        //     return $this->hasOne(Room::class, 'id', 'room_id');
        // }
        public function room1()
        {
            return $this->hasOne('App\Models\Room','id','room_id');
        }

}
