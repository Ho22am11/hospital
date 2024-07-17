<?php

namespace App\Models;

use App\Observers\ImageObserver;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalTests extends Model
{
    use HasFactory;
    protected $fillable = ['type' , 'img' , 'price' , 'id_patient' , 'id_doctor'];

    protected static function boot()
    {
        parent::boot();
        self::observe(ImageObserver::class);
    }
}
