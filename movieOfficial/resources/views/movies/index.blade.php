@extends('layout.app')

@section('content')
        <h1>Liste des films</h1>
   <div class="cards">
    
        @foreach($movies as $movie)
      
        
            <div class="card">
            <a href="/movies/{{ $movie['id'] }}">
                <img src={{$movie['img']}} alt={{ $movie['title'] }}>
                <br>
                {{ $movie['title'] }}
            </a>
        </div>
       
    
        @endforeach
    
</div>
    
    @endsection