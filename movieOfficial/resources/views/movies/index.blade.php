@extends('layout.app')

@section('content')
        <h1>Liste des films</h1>
    <div class="card" style="width: 18rem;">
<div class="card-body">

    <ul>
        @foreach($movies as $movie)
        <li class="lcard">
            <a href="/movies/{{ $movie['id'] }}">
                {{ $movie['title'] }}
            </a>
        </li>
        @endforeach
    </ul>
</div>
    </div>
   

    @endsection