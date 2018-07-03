<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book as Book;
use App\Author as Author;
use App\Genre as Genre;



class NavController extends Controller
{
    public function insert() {
        $authors = Author::all();
        $genres = Genre::all();
        return view('book.insertOne', ['authors' => $authors, 'genres' => $genres]);
    }

    public function showBook() {
        $books = Book::all()->load('author', 'genres');
        return view('book.showAll', ['books' => $books ]);
    }
   
    public function update(Request $request) {
        $author = Author::all();
        $genres = Genre::all();
        $book = Book::find($request->input('id'));
        return view('book.updateOne', ['author' => $author, 'genres' => $genres, 'book' => $book]);
    }
}
