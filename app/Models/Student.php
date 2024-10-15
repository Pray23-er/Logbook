<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use Illuminate\Notifications\Notifiable;

class Student extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'students';
    public $timestamps = true;

    protected $fillable = [
        'matric_number',
        'firstname',
        'lastname',
        'course_of_study',
        'level',
        'year',
        'email',
        'phone_number',
        'school_id',
        'password',
        'company_id',
    ];

    protected $hidden = [
        'password',
    ];

    public function school(): BelongsTo
    {
        return $this->belongsTo(School::class);
    }

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class,'company_id');
    }

    public function logbookRecords():HasMany
{
    return $this->hasMany(LogbookRecord::class);
}

}
