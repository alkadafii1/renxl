<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    protected $table = 'rentals';
    protected $fillable = ['release_year', 'rental_date_out', 'rental_date_returned', 'rental_amount_due'];
    public $timestamps = false;

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    public function movie()
    {
        return $this->belongsTO(Movie::class, 'movie_id');
    }
    public function rental()
    {
        return $this->hasMany(Rental::class, 'item_rental_id');
    }
}