<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalTests extends Model
{
    use HasFactory;
    protected $fillable = ['type' , 'img' , 'price' , 'id_patient' , 'id_doctor'];
}
