<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'transactions';
    protected $fillable = ['transaction_date', 'transaction_amount', 'transaction_comment'];
    public $timestamps = false;

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }
    public function rental()
    {
        return $this->belongsTo(Rental::class, 'item_rental_id');
    }

}