<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'lastName',
        'firstName',
        'age',
        'email',
        'educationSector',
        'phone',
        'educationLevel',
        'image'
    ];

    public function upgrades()
    {
        return $this->hasMany(Upgrade::class);
    }

    public function educationSector()
    {
        return $this->hasOne(EducationSector::class);
    }

    public function activities()
    {
        return $this->belongsToMany(Activity::class);
    }
}
