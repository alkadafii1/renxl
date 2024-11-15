<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    // Read
    public function all() {
        $movie = Movie::all();

        echo $movie;
    }

    public function find(int $id) {
        $movie = Movie::find($id);

        echo $movie;
    }

    public function where(string $movie_title) {
        $movie = Movie::where('movie_title', $movie_title)->get();

        echo $movie;
    }


    // Create
    public function insert(Request $request) {
        $movie = new Movie;
        $movie->release_year = $request->release_year;
        $movie->movie_title = $request->movie_title;
        $movie->description = $request->description;
        $movie->number_in_stock = $request->number_in_stock;
        $movie->status = $request->status;
        $movie->rental_daily_rate = $request->rental_daily_rate;
        $movie->save();

        echo $movie;
    }

    // Update
    public function update(int $id, Request $request) {
        $movie = new Movie;
        $movie->release_year = $request->release_year;
        $movie->movie_title = $request->movie_title;
        $movie->description = $request->description;
        $movie->number_in_stock = $request->number_in_stock;
        $movie->status = $request->status;
        $movie->rental_daily_rate = $request->rental_daily_rate;
        $movie->save();

        echo $movie;
    }

    // Delete
    public function delete(int $id) {
        $movie = Movie::find($id);
        $movie->delete();

        echo $movie;
    }
}