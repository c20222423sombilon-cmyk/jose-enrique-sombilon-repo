<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Auction extends Model
{
    protected $fillable = [
        'buyer_id',
        'auction_date',
        'price_per_kg',
    ];

    protected $casts = [
        'auction_date' => 'date',
        'price_per_kg' => 'decimal:2',
    ];

    public function buyer(): BelongsTo
    {
        return $this->belongsTo(Buyer::class);
    }

    public function catchLandingInformation(): HasMany
    {
        return $this->hasMany(
            FishingPortCatchLandingInformation::class
        );
    }
}