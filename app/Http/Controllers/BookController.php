<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display the specified book.
     *
     * @param  string  $book_slug
     * @return \Illuminate\View\View
     */
    public function show(string $book_slug)
    {
        // In a real application, you would fetch book details from the database
        // based on the $book_slug here. For now, we'll just pass the slug to the view.
            return view('buy', ['book_slug' => $book_slug]);
        }
    }