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
        // 1. Validation des données
        $request->validate([
            'title' => 'required|min:2',
            'img' => 'required',
            'description' => 'required',
        ]);
        // 2. Sauvegarde en base de données
        Movie::create($request->all());
        // 3. Redirection vers la liste
        return redirect('/movies');
    }

    public function edit($id)
    {
        $movie = Movie::findOrFail($id);
        return view('movies.edit', ['movie' => $movie]);
    }
    public function update(Request $request, $id)
    {
        $movie = Movie::findOrFail($id);
        $request->validate([
            'title' => 'required|min:2',
            'img' => 'required',
            'description' => 'required',
        ]);
        $movie->update($request->all());
        return redirect('/movies/' . $id);
    }
}
