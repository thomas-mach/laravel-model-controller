<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function app()
    {
        $movies = Movie::all();
        // dd($movies);
        return view('app', compact('movies'));
    }
}
