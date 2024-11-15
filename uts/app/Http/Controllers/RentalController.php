<?php

namespace App\Http\Controllers;

use App\Models\Rental;
use Illuminate\Http\Request;

class RentalController extends Controller
{
    // Read
    public function all() {
        $rentals = Rental::all();
        echo $rentals;
    }

    public function find(int $id) {
        $rental = Rental::find($id);
        echo $rental;
    }

    // Create
    public function insert(Request $request) {
        $rental = new Rental;
        $rental->release_year = $request->release_year;
        $rental->rental_date_out = $request->rental_date_out;
        $rental->rental_date_returned = $request->rental_date_returned;
        $rental->rental_amount_due = $request->rental_amount_due;
        $rental->customer_id = $request->customer_id;
        $rental->movie_id = $request->movie_id;
        $rental->save();

        echo $rental;
    }

    // Update
    public function update(int $id, Request $request) {
        $rental = Rental::find($id);
        $rental->release_year = $request->release_year;
        $rental->rental_date_out = $request->rental_date_out;
        $rental->rental_date_returned = $request->rental_date_returned;
        $rental->rental_amount_due = $request->rental_amount_due;
        $rental->customer_id = $request->customer_id;
        $rental->movie_id = $request->movie_id;
        $rental->save();

        echo $rental;
    }

    // Delete
    public function delete(int $id) {
        $rental = Rental::find($id);
        $rental->delete();

        echo $rental;
    }
}
