<?php

namespace App\Http\Controllers;

use App\Models\Authors;
use App\Models\Books;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PharIo\Manifest\Author;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $libros = DB::table('authors')
        ->join('books','authors.id', '=','books.author_id')->orderBy('authors.id')
        ->cursorPaginate(10);
 
        return view('books.index', [
            'books' => $libros,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('books.create', array(
            "authors" => Authors::all(),
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //TODO: Validamos que tenga todos los datos requeridos para el create.
        $request->validate([
            'title' => 'required',
            'isbn' => 'required',
            'published_date' => 'required',
            'author_id' => 'required',
        ]);

        $books =  Books::create([
            'title' => $request['title'],
            'isbn' => $request['isbn'],
            'published_date' =>$request['published_date'],
            'author_id' =>$request['author_id'],
            
        ]);
        
        return redirect()->
        route('books.index')->
        withSuccess("El Libro  {$books->title} fue creado");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Books $book)
    {
        
        return view("books.edit")->with([
            'books' => $book,
            'authors' => Authors::all(),
    
        ]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Books $book)
    {
        //TODO: Validamos que tenga todos los datos requeridos para el update.
        $request->validate([
            'title' => 'required',
            'isbn' => 'required',
            'published_date' => 'required',
            'author_id' => 'required',
        ]);
        
        $book->update( $request->all());
        return redirect()->
        route('books.index')->
        withSuccess("El libro {$book->title} fue editado");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Books $book)
    {
        $book->delete( $request->all());
 
       return redirect()->
       route('books.index')->
       withSuccess("El libro  {$book->name} fue eliminado");
    }
}
