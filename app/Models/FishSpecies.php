<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class FishSpecies extends Model
{
    protected $fillable = [
        'fish_species_name',
    ];

    public function catchLandingInformation(): HasMany
    {
        return $this->hasMany(
            FishingPortCatchLandingInformation::class
        );
    }
}