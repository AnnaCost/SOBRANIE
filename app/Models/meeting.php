<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class meeting extends Model
{
    use HasFactory;
    public $table = 'Meeting';
    public function Dom(): BelongsTo
    {
        return $this->belongsTo(dom::class);
    }
    public function Questions(): HasMany
    {
        return $this->hasMany(question::class);
    }
}
