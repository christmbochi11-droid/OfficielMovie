<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class movieController extends Controller
{
    private function getmovies()
    {
        return [
            ['id' => 1, 'title' => 'Avengers', 'img' => ' https://fr.web.img3.acsta.net/medias/nmedia/18/85/31/58/20042068.jpg ', 'description' => 'Voici un film sur une équipe de héro qui sauve les Etats Unis (la terre entière selon les Américains).'],
            ['id'=> 2, 'title' => 'Kubo and the magic armor', 'img' => ' https://fr.web.img6.acsta.net/pictures/16/08/04/11/18/451334.jpg ', 'description' => 'Kubo doit battre un maléfice pour venger sa famille avec une aide magique'],
            ['id'=>3, 'title' => 'My Hero Academia', 'img' => ' https://furansujapon.com/wp-content/uploads/2022/02/My-Hero-Academia-Visuel-3.jpg ', 'description' => 'Izuku Midorya doit réussir son rêve de devinir un super héros et sauver des vie comme son idole de toujours.'],
            ['id' => 4, 'title' => 'Murder Drones', 'img' => ' https://m.media-amazon.com/images/M/MV5BZmIwNDhhMTgtMWIyYS00Yzg0LTlmZjUtYTczNTU5MGVkNjlhXkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg ', 'description' => 'Sur une exoplanète post-apocalyptique, des drones ouvriers survivent à des aventures meurtrières.'],
            ['id'=> 5, 'title' => 'Grande Vandrouille', 'img' => ' https://fr.web.img5.acsta.net/pictures/16/06/16/12/01/072037.jpg', 'description' => 'des aviateurs anglais abattus au-dessus de Paris pendant la guerre doivent se retrouver au hammam après avoir sauté en parachute.'],
            ['id'=>6, 'title' => 'Fast and Furious', 'img' => 'https://fr.web.img5.acsta.net/medias/nmedia/00/02/30/50/69215495_af.jpg ', 'description' => 'Dominic Toretto dirige une équipe de passionnés de voitures qui font des courses illégales et dangereuses dans les rues de Los Angeles.'],
            ['id'=>7, 'title' => 'Mufasa', 'img'=>'https://fr.web.img6.acsta.net/c_310_420/img/f5/f2/f5f2447c4246e42eb3e69040605d7cf1.jpg', 'description'=> 'le film préquelle du roi lion'],
            ['id'=>8, 'title' => 'Lord of the ring', 'img'=>'https://media.senscritique.com/media/000022839829/300/le_seigneur_des_anneaux_le_retour_du_roi.png', 'description'=> 'Frodon doit se grouiller de jetter le anneau'],
            ['id'=>9, 'title' => 'McWalter', 'img'=>'https://fr.web.img6.acsta.net/img/98/0a/980a064983940929237f2f5c5a50a47c.jpg', 'description'=> 'Il fait chaud là non ?'],
            ['id'=>10, 'title' => 'Spider man', 'img'=>'https://m.media-amazon.com/images/M/MV5BNThiZjA3MjItZGY5Ni00ZmJhLWEwN2EtOTBlYTA4Y2E0M2ZmXkEyXkFqcGc@._V1_.jpg', 'description'=> 'Un spider man de plus pour la comu'],
            ['id'=>11, 'title' => 'Yannick', 'img'=>'https://medias.boutique.lab.arte.tv/prod/73955_vod_thumb_413488.jpg', 'description'=> 'Avoir un air stupid peut aider au cinéma ?'],
            ['id'=>12, 'title' => 'Superman', 'img'=>'https://fr.web.img6.acsta.net/c_310_420/img/97/ca/97ca64f4e5790703d0358c61aa7d1a11.jpg', 'description'=> 'On appelle un homme avec un S sur le torse'],
            ['id'=>13, 'title' => 'The dark knight Rises', 'img'=>'https://fr.web.img6.acsta.net/c_310_420/medias/nmedia/18/83/56/27/20158098.jpg', 'description'=> 'FOR GOTHAM'],
            ['id'=>14, 'title' => 'ted', 'img'=>'https://images.justwatch.com/poster/302701815/s718/ted.jpg', 'description'=> 'Vraiment une ordure ce type'],
            ['id'=>15, 'title' => 'Hannibal Lecter', 'img'=>'https://fr.web.img5.acsta.net/medias/nmedia/18/36/18/48/18724206.jpg', 'description'=> 'Tu va avoir peur mon petit.'],
            ['id'=>16, 'title' => 'World War Z', 'img'=>'https://fr.web.img3.acsta.net/c_310_420/medias/nmedia/18/94/54/41/20526204.jpg', 'description'=> 'Film de ACTIOOOOOOOOOOOOOOOOOOOOOOOOOON'],

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
