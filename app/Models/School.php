<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class School extends Model implements Authenticatable
{
    protected $fillable = [
        'name', // Add this line
        'email',
        'password',
        // Add other attributes that can be mass-assigned
    ];
    // ...

    // Implement required methods from Authenticatable contract
    public function getAuthIdentifierName()
    {
        return 'id';
    }

    public function getAuthIdentifier()
    {
        return $this->id;
    }

    public function getAuthPassword()
    {
        return $this->password;
    }

    public function getAuthPasswordName()
    {
        return $this->password;
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

    public function students(): HasMany
    {
        return $this->hasMany(Student::class, 'school_id','id');
    }
    public function company_forms(): HasMany
    {
        return $this->hasMany(company_form::class);
    }

    public function logbooks()
{
    return $this->hasManyThrough(Logbook::class, Student_form::class,  'matric_number', 'id', 'matric_number');
}
}
