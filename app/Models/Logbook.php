<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logbook extends Model
{
    use HasFactory;
    protected $fillable =[
        'title',
        'description',
        'matric_number',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class, 'matric_number');
    }
   
}
