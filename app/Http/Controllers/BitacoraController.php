<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBitacora;
use App\Models\Bitacora;
use Illuminate\Http\Request;

class BitacoraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Request $request)
    {

        if($request){

            if( trim($request->get('firmados'))){
               $query= trim($request->get('firmados'));
               $bitacoras=Bitacora::where('firma',1)
               ->orderBy('id','desc')
               ->paginate();
               return view('bitacoras.index',compact('bitacoras','query'));

            }
            if( trim($request->get('nofirmados'))){
                $query= trim($request->get('nofirmados'));
                $bitacoras=Bitacora::where('firma',0)
                ->orderBy('id','desc')
                ->paginate();
                return view('bitacoras.index',compact('bitacoras','query'));
             }
             if( trim($request->get('fecha'))){
                $query= trim($request->get('fecha'));
                $bitacoras=Bitacora::orderBy('fecha','desc')
                ->paginate();
                return view('bitacoras.index',compact('bitacoras','query'));
             }
//
            $query= trim($request->get('search'));
            $bitacoras=Bitacora::where('id','LIKE','%'.$query.'%' )

            ->orWhere('n_oficio','LIKE','%'.$query.'%')
            ->orWhere('nombre','LIKE','%'.$query.'%')
            ->orWhere('dirigido','LIKE','%'.$query.'%')
            ->orWhere('area','LIKE','%'.$query.'%')
            ->orWhere('direccion','LIKE','%'.$query.'%')
            ->where('observaciones','LIKE','%'.$query.'%')
            ->orderBy('id','desc')
            ->paginate();
            return view('bitacoras.index',compact('bitacoras','query'));
        }else{

            $query= trim($request->get('search'));
            $bitacoras=Bitacora::orderBy('id','desc')
            ->paginate();
            return view('bitacoras.index',compact('bitacoras','query'));
        }



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $tipo=auth()->user()->tipo;
        if($tipo == 'ADMINISTRADOR'){

               return view('bitacoras.create');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBitacora $request)
    {
        $bitacora= Bitacora::create($request->all());
        return redirect()->route('bitacoras.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Bitacora $bitacora)
    {
       // return $bitacora;
        return view('bitacoras.show',compact('bitacora'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Bitacora $bitacora)
    {
        return view('bitacoras.edit', compact('bitacora'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Bitacora $bitacora)
    {
     //   return $request;
        $bitacora->update($request->all());
        return redirect()->route('bitacoras.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bitacora $bitacora)
    {
        $bitacora->delete();
        return redirect()->route('bitacoras.index')->with('eliminar','ok');

    }
}
