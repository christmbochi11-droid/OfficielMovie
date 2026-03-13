<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class movieController extends Controller
{
    private function getmovies()
    {
        return [
            ['id' => 1, 'title' => 'Mon premier film', 'content' => 'Contenu du premier film...'],
            ['id' => 2, 'title' => 'Mon deuxième film', 'content' => 'Contenu du deuxième film...'],
            ['id' => 3, 'title' => 'Mon troisième film', 'content' => 'Contenu du troisième film...'],
        ];
    }

    public function index()
    {
        return view('movies.index', [
            'movies' => $this->getmovies()
        ]);
    }

    public function show($id)
    {
        $movies = $this->getmovies();
        $movie = collect($movies)->firstWhere('id', $id);

        return view('movies.show', [
            'movie' => $movie
        ]);
    }
}

