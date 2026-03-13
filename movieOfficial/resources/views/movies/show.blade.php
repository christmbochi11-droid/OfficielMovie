
@extends('layout.app')

@section('content')
<h1>{{ $movie['title'] }}</h1>

<p>{{ $movie['content'] }}</p>

<a href="/movies">Retour</a>
@endsection