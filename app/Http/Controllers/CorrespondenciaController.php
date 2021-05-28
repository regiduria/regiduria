<?php

namespace App\Http\Controllers;

use App\Models\Correspondencia;
use Illuminate\Http\Request;

class CorrespondenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index( Request $request){

        if($request){
            $query= trim($request->get('search'));
           if( $queryf=$request->get('año')){
            $correspondencias=Correspondencia::orderBy('id','desc')->paginate();
            return view('correspondencias.index',compact('correspondencias','query'));
            //  return view('panteones.index',compact('tramites','query'));
           }

            $correspondencias=Correspondencia::where('nombre_suscrito','LIKE','%'.$query.'%' )
            ->orWhere('clave','LIKE','%'.$query.'%')
            ->orWhere('numero_oficio','LIKE','%'.$query.'%')
            ->orWhere('tipo_tramite','LIKE','%'.$query.'%')
            ->orWhere('telefono','LIKE','%'.$query.'%')
            ->orWhere('fecha_tramite','LIKE','%'.$query.'%')
            ->orWhere('fecha_recibido','LIKE','%'.$query.'%')
            ->orderBy('id','desc')
            ->paginate();
            return view('correspondencias.index',compact('correspondencias','query'));
        }else{


        }
    }



  /*  public function index()
    {
        $correspondencias=Correspondencia::orderBy('id','desc')->paginate();
        return view('correspondencias.index',compact('correspondencias'));
    }*/

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


           return view('correspondencias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $correspondencias= Correspondencia::create($request->all());
        return redirect()->route('correspondencias.index');
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
    public function edit(Correspondencia $correspondencia)
    {

        return view('correspondencias.edit', compact('correspondencia'));
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
    public function destroy(Correspondencia $correspondencia)
    {
        $correspondencia->delete();
        return redirect()->route('correspondencias.index')->with('eliminar','ok');
    }
}
