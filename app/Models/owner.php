<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class owner extends Model
{
    use HasFactory;
    public $table = 'Owners';
    public function Apartment(): BelongsTo
    {
        return $this->belongsTo(apartment::class);
    }
    public function Voting(): HasMany
    {
        return $this->hasMany(voting::class);
    }
}
