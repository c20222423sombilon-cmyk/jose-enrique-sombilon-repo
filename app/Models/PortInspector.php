<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PortInspector extends Model
{
    public function catchLandingInformation(): HasMany
    {
        return $this->hasMany(
            FishingPortCatchLandingInformation::class
        );
    }
}