<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Library;

class LibraryController extends Controller
{
    public function index(){
        $libraries = Library::all();
        return view('libraries.index', compact('libraries'));
    }

    public function create(){
        return view('libraries.create');
    }

    public function store(Request $request){
        $library = new Library;
        $library->title = $request->input('title');
        $library->author = $request->input('author');
        $library->genre = $request->input('genre');
        $library->description = $request->input('description');
        $library->isbn = $request->input('isbn');
        $library->save();

        return redirect()->route('libraries.index');
    }

    public function edit(Library $library){

        return view('libraries.edit',compact('library'));
    }

    public function show(Library $library){
        return view('libraries.index',compact('library'));
    }

    public function update(Request $request, Library $library){
        $library->update($request->all());
        
        return redirect()->route('libraries.index')->with('success', 'Library updated successfully');
    }

    // public function update(Request $request, Library $library){
    //     $libraries = Library::all();
    //     $library->update($request);
        
    //     return redirect()->route('libraries.index')->with( ['libraries' => $libraries] );
    // }

    public function destroy(Library $library){
        $library->delete();

        return redirect()->route('libraries.index')
                        ->with('success', 'Product delete succssesfully');
    }
}