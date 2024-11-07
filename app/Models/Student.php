<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\Notifiable;

use App\Models\School;
use App\Models\Company;
use App\Models\CompanyForm;
use App\Models\Logbook;

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
    protected $primaryKey = 'matric_number';
    protected $hidden = [
        'password',
    ];


    public function getAuthPassword()
    {
        return $this->password;
    }

    public function getAuthIdentifierName()
    {
        return 'matric_number';
    }

    public function getAuthIdentifier()
    {
        return $this->matric_number;
    }

    public function getRememberToken()
    {
        return $this->remember_token;
    }

    public function setRememberToken($value)
    {
        $this->remember_token = $value;
    }

    public function getRememberTokenName()
    {
        return 'remember_token';
    }


    public function belongsToSchool(): BelongsTo
    {
        return $this->belongsTo(School::class);
    }

    public function belongsToCompany(): BelongsTo
    {
        return $this->belongsTo(Company::class, 'company_id');
    }

    public function company_forms(): HasMany
    {
        return $this->hasMany(company_form::class, 'matric_number', 'matric_number');
    }

    public function logbooks()
    {
        return $this->hasMany(Logbook::class, 'matric_number');
    }


}
