<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Claim extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'message',
        'is_resolved',
        'user_id'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function scopeResolved()
    {
        return $this->where('is_resolved', true);
    }

    public function scopeNotResolved()
    {
        return $this->where('is_resolved', false);
    }
}
