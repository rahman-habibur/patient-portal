<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    
    protected $fillable = [
        'title',
        'patient_name',
        'mobile',
        'mobile',
        'patient_age',
        'patient_blood',
        'guardian_name',
        'guardian_mobile',
        'email',
        'area',
        'address',
        'note'
    ];


    use HasFactory;
}
