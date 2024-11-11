<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class dom extends Model
{
    use HasFactory;
    public $table = 'Dom';
    public function Apartment(): HasMany
    {
        return $this->hasMany(apartment::class);
    }
    public function Meeting(): HasMany
    {
        return $this->hasMany(meeting::class);
    }
}
