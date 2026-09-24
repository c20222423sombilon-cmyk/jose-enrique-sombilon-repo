<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Buyer extends Model
{
    protected $fillable = [
        'buyer_name',
        'buyer_contact',
    ];

    public function auctions(): HasMany
    {
        return $this->hasMany(Auction::class);
    }
}