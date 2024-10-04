<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student_form extends Model
{
    use HasFactory;
    protected $fillable = [
        'matric_number',
        'school_name',
        'phone_number',
        'address',
        'firstname',
        'lastname',

    ];
}
