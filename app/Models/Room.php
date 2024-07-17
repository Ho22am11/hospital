<?php

namespace App\Models;

use App\Enums\StutasRoom;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    protected $casts = [
        'status' => StutasRoom::class ,
    ];
}
