<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'checkIn',
        'user_id',
        'checkOut',
        'adults',
        'children',
        'roomType',
        'status',
        'name',
        'phone'
    ];
}