<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Vessel extends Model
{
    protected $fillable = [
        'vessel_name',
        'vessel_type',
        'captain_name',
    ];

    public function landings(): HasMany
    {
        return $this->hasMany(Landing::class);
    }
}