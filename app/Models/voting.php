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
    protected $fillable = ['name_owner_id', 'questions_id', 'Result'];
    public $timestamps = false;
    public function owner(): BelongsTo
    {
        return $this->belongsTo (Owner::class,'name_owner_id', 'id');
    }
    public function question(): BelongsTo
    {
        return $this->belongsTo(Question::class, 'questions_id', 'id');
    }
}
