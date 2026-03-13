
@extends('layout.app')

@section('content')
<h1>{{ $movie['title'] }}</h1>
<img src={{$movie['img']}} alt={{ $movie['title'] }}>
<p>{{ $movie['description'] }}</p>

<a href="/movies">Retour</a>
@endsection