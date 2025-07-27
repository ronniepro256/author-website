<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function show($book_slug)
    {
        $books = [
            'book-one' => ['title' => 'Book One', 'image' => 'images/book-cover-1.jpg', 'description' => 'A thrilling novel.', 'price' => 19.99],
            'book-two' => ['title' => 'Book Two', 'image' => 'images/book-cover-2.jpg', 'description' => 'An epic adventure.', 'price' => 24.99],
        ];
        $book = $books[$book_slug] ?? abort(404);
        return view('buy', compact('book'));
    }
}