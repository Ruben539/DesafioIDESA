<?php

namespace App\Http\Controllers;

use App\Models\Debts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class debtsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {       
        $debs = Debts::all();
        
        return view('debts.index', [
            'debs' => $debs
        ]);
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //TODO: Inicializamos las variables a enviar en el json.
        $estatus = true;
        $mensaje      = 'Tienes lotes pendientes de cobro';
        $details      = [];

        //FIXME: Realizamos la consulta a la table y agregamos las condicionales de filtro
        $details = DB::table('debts')->where('lote', '=', '00148')->where('vencimiento', '!=',null)->get();

        
       //TODO: Devolvemos un json response para hacer el anidado de objetos.
        return  response()->json([
            'estatus' => $estatus,
            'mensaje' => $mensaje,
            'data' => $details->sum('precio'),
            'detail' => $details
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //TODO: Realizamos el query para obtener todos los datos del lote seleccionado.
        $lotes = DB::table('debts')->where('lote', '=', $request->lote)->get();

        //TODO: Mostramos el resultado de la consulta.
        return $lotes;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //TODO: Realizamos una consulta queryBiulder para obtneer los datos y mostrarlos.
        $debs = DB::table('debts')->where('lote', '=', '00148')->get();

        return $debs;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
