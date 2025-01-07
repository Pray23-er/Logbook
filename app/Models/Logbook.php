<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Logbook extends Model
{
    use HasFactory;
    protected $fillable =[
        'title',
        'description',
        'matric_number',
        'status',
        'thumbnail'
    ];

    public function student()
    {
        return $this->belongsTo(Student::class, 'matric_number');
    }

    public function getThumbnailAttribute($value)
    {
        return asset('thumbnails/' . basename($value));
    }
}
