<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MovieSchedule extends Model
{
    protected $table = 'schedules';
    
    protected $fillable = [
        'movie_id',
        'date',
        'time_from',
        'time_to'
    ];

    public function movie(): BelongsTo
    {
        return $this->belongsTo(Movie::class, 'movie_id');
    }

    public function tickets(): HasMany
    {
        return $this->hasMany(Ticket::class, 'schedule_id');
    }
}