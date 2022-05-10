<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{

    public function participate(): HasMany
    {
        return $this->hasMany(participate::class);
    }
    use HasFactory;
}
