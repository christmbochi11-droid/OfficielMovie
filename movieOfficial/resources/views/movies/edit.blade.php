@extends('layout.app')

@section('content')
<h2>Modifier le film</h2>
@if($errors->any())
<ul>
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif
<form action="/movies/{{ $movie->id }}" method="POST">
    @csrf
    @method('PUT')
        <label>Titre du film</label>
    <input type="text" name="title" value="{{old('title',$movie->title)}}">   
    <label>Lien de l'image du film</label>
    <input type="text" name="img" value="{{old('img',$movie->img)}}">   
    <label>Description du film</label>
    <input type="text" name="description" value="{{old('description',$movie->description)}}"> 
    <button type="submit">Enregistrer</button>
</form>


<a href="/movies">Retour</a>
@endsection