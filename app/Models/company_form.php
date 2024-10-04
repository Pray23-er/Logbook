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

    ];
}
