<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upgrade extends Model
{
    use HasFactory;

    protected $fillable = ['matter', 'upgrade', 'date', 'average'];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function matter()
    {
        return $this->belongsTo(Matter::class);
    }
}
