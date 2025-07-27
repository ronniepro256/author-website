<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $author = [
            'name' => 'Elara Vance',
            'bio' => 'Elara Vance is an award-winning author known for her captivating novels.',
            'image' => 'images/author.jpg',
        ];
        return view('about', compact('author'));
    }
}