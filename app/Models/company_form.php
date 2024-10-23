<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class company_form extends Model
{
    use HasFactory;
    protected $fillable = [
        'companyname',
        'Company_email',
        'Company_phone_number',
        'Added_by',
        'matric_number',

    ];

    public function school(): BelongsTo
    {
        return $this->belongsTo(School::class);
    }

    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class, 'matric_number', 'matric_number');
    }
}
