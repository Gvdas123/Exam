<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\BookModel;
use App\Models\AuthorsModel;
class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    { 
        $book=BookModel::all();
        
        return view('books.show')->with('book',$book);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {  
        return view('books.create', ["book" => AuthorsModel::get() ]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input1=$request->all();
        BookModel::create($input1);
        return redirect('book')->with('flash_message','Car Addedd!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $book=BookModel::orderBy('title','ASC')->get();
        return view('books.show')->with('book',$book);
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $book = BookModel::find($id);
        return view('books.edit')->with('book',$book);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $book=BookModel::find($id);
        $input=$request->all();
        $book->update($input);
        return redirect('book');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        BookModel::destroy($id);
        return redirect('book');
    }
    
}
