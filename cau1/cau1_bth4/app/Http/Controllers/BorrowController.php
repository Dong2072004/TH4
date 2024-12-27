<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Borrow;
use App\Models\Reader;
use Illuminate\Http\Request;

class BorrowController extends Controller
{
    function index(){
        $borrows = Borrow::all();
        return view('borrows.index', compact('borrows'));
    }
    function create(){
        $readers = Reader::all();
        $books = Book::all();
        return view('borrows.add', compact('readers', 'books'));

    }
    function store(Request $request){
        $validate = $request->validate([
            'reader_id' => 'required|string|max:255',
            'book_id' => 'required|string|max:255',
            'borrow_date' => 'required|date',
            'return_date' => 'required|date|after:borrow_date',
            'status' => 'required|string|max:255',
        ]);
        Borrow::create($validate);
        return redirect()->route('borrows.index');
    }
    function show(string $id){

    }
    function edit(string $id){
        $borrows = Borrow::find($id);
        $books = Book::all();
        $readers = Reader::all();
        return view('borrows.edit', compact('borrows', 'books', 'readers'));
    }

    function update(Request $request, string $id){
        $validate = $request->validate([
            'reader_id' => 'required',
            'book_id' => 'required',
            'borrow_date' => 'required|date',
            'return_date' => 'required|date|after:borrow_date',
            'status' => 'required|string|max:255',
        ]);
        $borrows = Borrow::find($id);
        $borrows->update($validate);
        return redirect()->route('borrows.index')->with('success', 'Cap nhat thanh cong');
    }
    function destroy(string $id){
        $borrows = Borrow::find($id);
        $borrows->delete();
        return redirect()->route('borrows.index')->with('success', 'Xoa thanh cong');
    }
}
