@extends('layout.app')

@section('content')


<div id="catalog" class="catalog-section">
    
    <div class="menu-container">
        <button class="menu-trigger">
            <span class="menu-icon">☰</span> Menu Genres
        </button>
        
        <div class="genre-dropdown">
            <a href="?" class="genre-item {{ !request('genre') ? 'active' : '' }}">Tous les films</a>
            <a href="?genre=Action" class="genre-item {{ request('genre') == 'Action' ? 'active' : '' }}">Action</a>
            <a href="?genre=Animation" class="genre-item {{ request('genre') == 'Animation' ? 'active' : '' }}">Animation</a>
            <a href="?genre=Comédie" class="genre-item {{ request('genre') == 'Comédie' ? 'active' : '' }}">Comédie</a>
            <a href="?genre=Drame" class="genre-item {{ request('genre') == 'Drame' ? 'active' : '' }}">Drame</a>
            <a href="?genre=Fantastique" class="genre-item {{ request('genre') == 'Fantastique' ? 'active' : '' }}">Fantastique</a>
        </div>
    </div>


<div class="hero-presentation-banner">
    <div class="banner-inner-content">
        <h1 class="main-banner-title">Bienvenue sur OfficielMovie</h1>
        <p class="main-banner-text">Où tu redécouvres tous tes classiques</p>
    </div>
</div>


    <div class="cards" id="moviesContainer">
        @foreach($movies as $movie)
            <div class="card">
                
                <div class="card-badges">
                    <span class="badge badge-year">{{ $movie->year ?? '2026' }}</span>
                    <span class="badge badge-lang">VF</span>
                </div>
                
                <a href="/movies/{{ $movie->id }}">
                    <img src="{{ $movie->img }}" alt="{{ $movie->title }}">
                    <br>
                    {{ $movie->title }}
                </a>
            </div>
        @endforeach
    </div>
</div>

<div class="button">
    <a href="/movies/create" class="btn-create">Ajouter un film</a>
</div>

@endsection