<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function createBook(Request $request)
    {
        $incomingFields = $request->validate([
            'title' => 'required',
            'price' => ['required', 'numeric'],
        ]);

        $incomingFields['title'] = strip_tags($incomingFields['title']);
        $incomingFields['price'] = strip_tags($incomingFields['price']);

        Book::create($incomingFields);
        return redirect('/dashboard');
    }

    public function allBooks()
    {
        $books = Book::where('user_id', null)->get();
        return view('home', ['books' => $books]);
    }

    public function updateInfo(Book $book, Request $request) {
        $incomingFields = $request->validate([
            'title' => 'required',
            'price' => ['required', 'numeric'],
        ]);

        $incomingFields['title'] = strip_tags($incomingFields['title']);
        $incomingFields['price'] = strip_tags($incomingFields['price']);

        $book->update($incomingFields);
        return redirect('/dashboard');
    }

    public function deleteBook(Book $book)
    {
        $book->delete();
        return redirect('/dashboard');
    }

    public function buyBook(Book $book)
    {
        $incomingFields['user_id'] = auth()->id();

        $book->update($incomingFields);
        return redirect('books');
    }
}
