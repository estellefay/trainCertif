@extends('template') 
@section('content') 
    <form action="/book/insertAction" method="post">
        @csrf
        <label for="title">Titre du livre</label>
        <input type="text" name="title" id="title">

        <label for="price">Prix du livre</label>
        <input type="number" name="price" id="price">

        <label for="author">Auteur du livre</label>
        <select name="author" id="author">
            @foreach($authors as $author)
        <option value="{{ $author->id }}">{{ $author->name }}</option>   
            @endforeach   
        </select>

        <label for="genres">Genre du livre</label>
        <select name="genres[]" multiple class="" id="genres">
            @foreach($genres as $genre)
        <option value="{{ $genre->id }}">{{ $genre->name }}</option>   
            @endforeach      
        </select>

        <input type="submit" value="Inserer">
    </form>
@endsection