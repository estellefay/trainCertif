<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book as Book;
use App\Author as Author;
use App\Genre as Genre;

class BookController extends Controller
{
    public function insertAction(Request $request) {
        $newBook = new Book;
        $newBook->title = $request->title;
        $newBook->price = $request->price;
        $newBook->author_id = $request->author; // insert many to one
        $newBook->save();
        foreach ($request->input('genres') as $key => $value) {
            // Insert with many to many
            $newBook->genres()->attach($value);
        }
        return redirect('/showBook');
    }

    public function deleteOne(Request $request) {
        Book::destroy($request->input('id'));
        return redirect('/showBook');

    }

    public function updateAction(Request $request) {
        $book = Book::find($request->input('id'));
        $book->title = $request->input('title');
        $book->price = $request->input('price');
        $book->author_id = $request->input('author'); // insert many to one
        $book->save();
        foreach ($request->input('genres') as $key => $value) {
            // Insert with many to many
            $book->genres()->attach($value);
        }
        return redirect('/showBook');
    }
    // metode update action Employe::find($request->input('id')) et save
}
