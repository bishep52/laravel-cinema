<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Movie extends Model
{
        /** @use HasFactory<\Database\Factories\UserFactory> */
        use HasFactory;

        /**
         * The attributes that are mass assignable.
         *
         * @var list<string>
         */

    protected $fillable = [
        'title',
        'slug',
        'description',
        'duration',
        'country',
        'release_date',
        'rating',
        'poster',
    ];

    public function genres(): BelongsToMany 
    {
        return $this->belongsToMany(Genre::class, 'movie_genre', 'movie_id', 'genre_id');
    }

    public function schedules(): HasMany
    {
        return $this->hasMany(MovieSchedule::class);
    }
}
