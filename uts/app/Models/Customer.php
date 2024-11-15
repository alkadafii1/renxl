<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';
    protected $fillable = ['first_name', 'last_name', 'address', 'phone', 'email'];
    public $timestamps = false;

    public function customer()
    {
        return $this->hasMany(Customer::class, 'customer_id');
    }
}