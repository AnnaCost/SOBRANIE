<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class apartment extends Model
{
    use HasFactory;
    public $table = 'Apartment';
    public function Dom(): BelongsTo
    {
        return $this->belongsTo(dom::class);
    }
    public function Owners(): HasMany
    {
        return $this->hasMany(owner::class);
    }
}
