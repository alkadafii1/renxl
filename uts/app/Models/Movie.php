<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table = 'movies';
    protected $fillable = ['release_year', 'movie_title', 'description', 'number_in_stock', 'status', 'rental_daily_rate'];
    public $timestamps = false;

    public function movie()
    {
        return $this->hasMany(Movie::class, 'movie_id');
    }
}