<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Laravel\Passport\Bridge\UserRepository;

class UserController extends Controller
{
    public function index() {
      
        $user = User::all(); 
        
        return view('users.index', [
            'users' => DB::table('users')->orderBy('id')->cursorPaginate(10)
        ]);
    }

    public function create() {

        return view('users.create');
    }

    public function store(User $users, Request $request){  

        $users =  User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            
        ]);
        
        return redirect()->
        route('users.index')->
        withSuccess("El Usuario de id: {$users->name} fue creado");
        
      }

    public function edit(User $user) {

        //return $user;
        return view("users.edit")->with([
            'users' => $user,
    
        ]);
    }

    public function update( Request $request, User $user) {

        $user->update( $request->all());
        return redirect()->
        route('users.index')->
        withSuccess("El Usuario de : {$user->name} fue editado");
      
    }

    public function show( $user) {
    
      $users = User::findOrFail($user);
      return view('users.show')->with([
        'users' => $users,
      
    ]);     
    }

    public function destroy(Request $request, User $user){
        // $user = User::findOrFail($product);
 
       $user->delete( $request->all());
 
       return redirect()->
       route('users.index')->
       withSuccess("El Usuario de id: {$user->name} fue eliminado");
 
      }

      public function logout(Request $request){
        
        Auth::logout();

        //Linea para invalidar la sesion del usuario y generar un nuevo token
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        //Linea para Redireccionar al usuario al inicio
        return redirect('/');

      }


}
