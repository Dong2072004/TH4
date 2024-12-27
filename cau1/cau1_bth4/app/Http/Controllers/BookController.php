<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        $books = Book::all();
        return view('books.index', compact('books'));
    }
    public function create(){

        return view('books.add');

    }
    public function store(Request $request){
        $validate = $request->validate([
            'name' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'year' => 'required|integer',
            'quantity' => 'required|integer',
        ]);
        Book::create($validate);
        return redirect()->route('books.index')->with('success', 'Them thanh cong');
    }
    public function show(string $id){
        $books = Book::find($id);
        return view('books.show',compact('books'));
    }
    public function edit(string $id){
        $books = Book::find($id);
        return view('books.edit',compact('books'));
    }
    public function update(Request $request, string $id){
        $validate = $request->validate([
            'name' => 'required',
            'author' => 'required',
            'category' => 'required',
            'year' => 'required',
            'quantity' => 'required',
        ]);
        $books = Book::find($id);
        $books->update($request->all());
        return redirect()->route('books.index')->with('success', 'Cap nhat thanh cong');
    }
    public function destroy(string $id){
        $books = Book::find($id);
        $books->delete();
        return redirect()->route('books.index')->with('success', 'Xoa thanh cong');
    }




}
