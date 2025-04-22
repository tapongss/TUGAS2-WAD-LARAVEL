<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function index()
    {
        $books = \App\Models\Book::all();
        return view('books.index', compact('books'));
    }

}
