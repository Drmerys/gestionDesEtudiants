<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matter extends Model
{
    use HasFactory;

    public function upgrades()
    {
        return $this->hasMany(Upgrade::class);
    }

    public function professor()
    {
        return $this->hasOne(Professor::class);
    }
}
