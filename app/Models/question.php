<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class question extends Model
{
    use HasFactory;
    public $table = 'Questions';
    public function Meeting(): BelongsTo
    {
        return $this->belongsTo(meeting::class);
    }
    public function Voting(): HasMany
    {
        return $this->hasMany(voting::class);
    }
}
