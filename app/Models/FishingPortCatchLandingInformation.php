<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FishingPortCatchLandingInformation extends Model
{
    protected $table = 'fishing_port_catch_landing_information';

    protected $fillable = [
        'landing_id',
        'fish_species_id',
        'auction_id',
        'port_inspector_id',
        'fish_grade',
        'total_weight_kg',
        'storage_temperature_celsius',
        'inspection_status',
        'settlement_status',
    ];

    protected $casts = [
        'total_weight_kg' => 'decimal:2',
        'storage_temperature_celsius' => 'decimal:2',
    ];

    public function landing(): BelongsTo
    {
        return $this->belongsTo(Landing::class);
    }

    public function fishSpecies(): BelongsTo
    {
        return $this->belongsTo(FishSpecies::class);
    }

    public function auction(): BelongsTo
    {
        return $this->belongsTo(Auction::class);
    }

    public function portInspector(): BelongsTo
    {
        return $this->belongsTo(PortInspector::class);
    }
}