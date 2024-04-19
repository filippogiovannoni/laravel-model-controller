<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        // $movies = Movie::all();
        $movies = Movie::where('vote', '>', 8.5)->orderBy('vote', 'desc')->limit(4)->get();
        return view('guests.homepage', compact('movies'));
        dd($movies);
    }
}
