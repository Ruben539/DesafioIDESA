<?php

namespace App\Http\Controllers;

use App\Models\Authors;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('authors.index', [
            'authors' => DB::table('authors')->orderBy('id')->cursorPaginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('authors.create');
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
            'name' => 'required',
            'birthdate' => 'required',
            'nationality' => 'required',
        ]);

        $authors =  Authors::create([
            'name' => $request['name'],
            'birthdate' => $request['birthdate'],
            'nationality' =>$request['nationality'],
            
        ]);
        
        return redirect()->
        route('authors.index')->
        withSuccess("El Autor de id: {$authors->name} fue creado");
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
    public function edit(Authors $author)
    {
        return view("authors.edit")->with([
            'authors' => $author,
    
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update( Request $request, Authors $author) {

        //TODO: Validamos que tenga todos los datos requeridos para el update.
        $request->validate([
            'name' => 'required',
            'birthdate' => 'required',
            'nationality' => 'required',
        ]);

        $author->update( $request->all());
        return redirect()->
        route('authors.index')->
        withSuccess("El Autor {$author->name} fue editado");
      
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Authors $author){
        // $author = author::findOrFail($product);
 
       $author->delete( $request->all());
 
       return redirect()->
       route('authors.index')->
       withSuccess("El Autor  {$author->name} fue eliminado");
 
      }
}
