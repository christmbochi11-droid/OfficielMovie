@extends('layout.app')

@section('content')
<h2>Ajouter votre nouveau film</h2>
@if($errors->any())
<ul>
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
@endforeach

</ul>@endif
<form action="/movies" method="POST">
    @csrf

    <label>Titre du film</label>
    <input type="text" name="title" value="{{old('title')}}">   
    <label>Lien de l'image du film</label>
    <input type="text" name="img" value="{{old('img')}}">   
    <label>Description du film</label>
    <input type="text" name="title" value="{{old('description')}}"> 
    <button type="submit">Enregistrer</button> 
</form>

@endsection