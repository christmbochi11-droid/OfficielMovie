<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class movieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();

        return view('movies.index', [
            'movies' => $movies
        ]);
    }

    public function show($id)
    {
        $movie = Movie::findOrFail($id);

        return view('movies.show', [
            'movie' => $movie
        ]);
    }
    public function create()
    {
        return view('movies.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:2',
            'img' => 'required',
            'description' => 'required|min:20',
        ]);
        Movie::create($request->all());
        return redirect('/movies');
    }
}
