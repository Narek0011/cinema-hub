<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MovieShowing extends Model
{
    protected $fillable = [
        'movie_id',
        'showing_time',
        'price_tenge',
        'format',
        'hall_name',
        'is_available',
    ];

    protected $casts = [
        'showing_time' => 'datetime',
        'is_available' => 'boolean',
    ];

    public function movie(): BelongsTo
    {
        return $this->belongsTo(Movie::class);
    }
}
