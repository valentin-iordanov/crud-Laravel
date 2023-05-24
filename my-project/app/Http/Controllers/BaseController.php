<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function homeView()
    {
        return view('base.home');
    }

    public function booksView()
    {
        $books = Book::where('user_id', null)->get();
        return view('base.books', ['books' => $books]);
    }

    public function myBooksView()
    {
        /** @var User $user */
        $user = auth()->user();
        $books = $user->allBoughtBooks()->get();

        return view('base.library', ['books' => $books]);
    }

    public function showEditScreen(Book $book) {
        return view('admin.editBook', ['book' => $book]);
    }

    public function aboutView()
    {
        return view('base.about');
    }

    public function contactView()
    {
        return view('base.contact');
    }

    public function viewLogin() {
        if (auth()->user() != null) {
            return redirect('/');
        }
        return view('guest.login');
    }

    public function viewRegister() {
        if (auth()->user() != null) {
            return redirect('/');
        }
        return view('guest.register');
    }

    public function viewDashboaed() {
        $books = Book::where('user_id', null)->get();
        return view('admin.dashboard', ['books' => $books]);
    }

    public function viewCreateBook() {
        return view('admin.create-book');
    }

}
