@extends('template') 
@section('content') 


<table>
    <tr>
        <th>Titre</th>
        <th>Prix</th>
        <th>Autheur</th>
        <th>Genre</th>
        <th>Delete</th>
        <th>Update</th>
    </tr>

    @foreach($books as $value)
        <tr>
            <td>{{ $value->title }}</td>
            <td>{{ $value->price }}</td>
            <td>{{ $value->author->name }}</td>
            <td>
                @foreach ($value->genres as $genre)
                    <p>{{ $genre->name }}</p>
                @endforeach
            </td>
            <td>
                <form action="/deleteOne" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{  $value['id'] }}">
                    <button type="submit">Delete</button>
                </form>
            </td>
            <td>
                <form action="/updateOne" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{  $value['id'] }}">
                    <button type="submit">Update</button>
                </form>
            </td>
        </tr>
    @endforeach


</table> 

@endsection