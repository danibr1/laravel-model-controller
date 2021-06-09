<?php

namespace App\Http\Controllers;
// USE APP MOVIE
use App\Movie;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index() {
        $movies = Movie::all();
        // dump($movies);

        return view('movies', compact('movies'));
    }
}
