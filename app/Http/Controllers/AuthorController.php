<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AuthorsModel;
use App\Models\BookModel;
class AuthorController extends Controller
{
    public function index(Request $request)
    {   $auth=AuthorsModel::all();
        
        return view('authors.show')->with('auth',$auth);
    }
    public function create()
    {
        return view('authors.create', ["auth" => AuthorsModel::get() ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input=$request->all();
        AuthorsModel::create($input);
        return redirect('auth')->with('flash_message','Owner Addedd!');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    { 
        $auth= AuthorsModel::all();
        return view('authors.show')->with('auth',$auth);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
     $auth = AuthorsModel::find($id);
     
     
    return view('authors.edit')->with('auth',$auth);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $auth=AuthorsModel::find($id);
        $input=$request->all();
        $auth->update($input);
        return redirect('auth');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, Request $request){ 
        AuthorsModel::destroy($id);
        return redirect('auth')->with('flash_message',"Owner deleted!");
    }
}