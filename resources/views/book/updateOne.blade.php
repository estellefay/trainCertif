@extends('template') 
@section('content') 
<h1>hello update</h1>

<form action="/book/updateAction" method="post">
    @csrf
    <input type="hidden" name="id" value="{{  $book->id }}">

    <label for="title">Titre du livre</label>
    <input type="text" name="title" id="title" value="{{ $book->title }}">

    <label for="price">Prix du livre</label>
    <input type="number" name="price" id="price" value="{{ $book->price }}">

    <label for="author">Auteur du livre</label>
    <select name="author" id="author">
        @foreach($author as $value)
    <option value="{{ $value->id }}">{{ $value->name }}</option>   
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
