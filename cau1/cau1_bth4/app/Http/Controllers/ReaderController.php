<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class ReaderController extends Controller
{
    public function index(){
        $books = Book::all();
        return view('reader.index', compact('books'));
    }
}
