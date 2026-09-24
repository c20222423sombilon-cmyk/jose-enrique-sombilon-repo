<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Landing extends Model
{
    protected $fillable = [
        'vessel_id',
        'arrival_date',
        'docking_pier_number',
    ];

    protected $casts = [
        'arrival_date' => 'date',
    ];

    public function vessel(): BelongsTo
    {
        return $this->belongsTo(Vessel::class);
    }

    public function catchLandingInformation(): HasMany
    {
        return $this->hasMany(
            FishingPortCatchLandingInformation::class
        );
    }
}