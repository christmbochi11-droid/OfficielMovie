<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class movieController extends Controller
{
    private function getmovies()
    {
        return [
            ['id' => 1, 'title' => 'Avengers', 'img' => 'https://fr.web.img3.acsta.net/medias/nmedia/18/85/31/58/20042068.jpg', 'description' => 'Voici un film sur une équipe de héro qui sauve les Etats Unis (la terre entière selon les Américains).'],
            ['id'=> 2, 'title' => 'Kubo and the magic armor', 'img' => 'https://fr.web.img6.acsta.net/pictures/16/08/04/11/18/451334.jpg', 'description' => 'Kubo doit battre un maléfice pour venger sa famille avec une aide magique'],
            ['id'=>3, 'title' => 'My Hero Academia', 'img' => 'https://furansujapon.com/wp-content/uploads/2022/02/My-Hero-Academia-Visuel-3.jpg', 'description' => 'Izuku Midorya doit réussir son rêve de devinir un super héros et sauver des vie comme son idole de toujours.'],
            ['id' => 4, 'title' => 'Murder Drones', 'img' => 'https://m.media-amazon.com/images/M/MV5BZmIwNDhhMTgtMWIyYS00Yzg0LTlmZjUtYTczNTU5MGVkNjlhXkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg', 'description' => 'Sur une exoplanète post-apocalyptique, des drones ouvriers survivent à des aventures meurtrières.'],
            ['id'=> 5, 'title' => 'Grande Vandrouille', 'img' => 'https://fr.web.img5.acsta.net/pictures/16/06/16/12/01/072037.jpg', 'description' => 'des aviateurs anglais abattus au-dessus de Paris pendant la guerre doivent se retrouver au hammam après avoir sauté en parachute.'],
            ['id'=>6, 'title' => 'Fast and Furious', 'img' => 'https://fr.web.img5.acsta.net/medias/nmedia/00/02/30/50/69215495_af.jpg', 'description' => 'Dominic Toretto dirige une équipe de passionnés de voitures qui font des courses illégales et dangereuses dans les rues de Los Angeles.'],
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
