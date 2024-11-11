<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class voting extends Model
{
    use HasFactory;
    public $table = 'Voting';
    public function Owners(): BelongsTo
    {
        return $this->belongsTo (owner::class, 'name_owner_id', 'id');
    }
    public function Questions(): BelongsTo
    {
        return $this->belongsTo(question::class, 'questions_id', 'id');
    }
}
