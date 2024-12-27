<?php

namespace App\Http\Controllers;


use App\Models\Reader;
use Illuminate\Http\Request;

class ReaderController extends Controller
{
    public function index(){
        $readers = Reader::all();
        return view('readers.index', compact('readers'));
    }
    public function create(){
        return view('readers.add');
    }
    public function store(Request $request){
        $validate = $request->validate([
            'name' => 'required|string|max:255',
            'birthday' => 'required|date',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
        ]);
        Reader::create($validate);
        return redirect()->route('readers.index');

    }
    public function show(string $id){
        $reader = Reader::find($id);
        return view('readers.show', compact('reader'));
    }
    public function edit(string $id){
        $reader = Reader::find($id);
            return view('readers.edit', compact('reader'));


    }
    public function update(Request $request, string $id){
        $validate = $request->validate([
            'name' => 'required|string|max:255',
            'birthday' => 'required|date',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
        ]);
        $reader = Reader::find($id);
        $reader->update($request->all());
        return redirect()->route('readers.index');

    }
    public function destroy(string $id){
        $reader = Reader::find($id);
        $reader->delete();
        return redirect()->route('readers.index');

    }
}
