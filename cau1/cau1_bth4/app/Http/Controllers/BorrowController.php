<?php

namespace App\Http\Controllers;

use App\Models\Borrow;
use Illuminate\Http\Request;

class BorrowController extends Controller
{
    function index(){
        $borrows = Borrow::all();
        return view('borrows.index', compact('borrows'));
    }
    function create(){
        return view('borrows.create');

    }
    function store(Request $request){

    }
    function show(Borrow $borrow){

    }
    function edit(Borrow $borrow){

    }

    function update(Request $request, Borrow $borrow){

    }
    function destroy(Borrow $borrow){

    }
}
