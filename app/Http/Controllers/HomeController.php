<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $books = [
            ['title' => 'Book One', 'slug' => 'book-one', 'image' => 'images/book-cover-1.jpg', 'description' => 'A thrilling novel by Elara Vance.'],
            ['title' => 'Book Two', 'slug' => 'book-two', 'image' => 'images/book-cover-2.jpg', 'description' => 'An epic adventure awaits.'],
        ];
        $testimonials = [
            ['name' => 'Reader A', 'text' => 'An amazing read!', 'image' => 'images/reader-a.jpg'],
            ['name' => 'Reader B', 'text' => 'Couldn’t put it down!', 'image' => 'images/reader-b.jpg'],
        ];
        return view('home', compact('books', 'testimonials'));
    }
}