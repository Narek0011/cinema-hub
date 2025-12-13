<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Movie extends Model
{

    protected $fillable = [
        'title',
        'slug',
        'poster_path',
        'age_rating',
        'genres',
        'description',
    ];

    public function showings(): HasMany
    {
        return $this->hasMany(MovieShowing::class)->orderBy('showing_time');
    }
}
