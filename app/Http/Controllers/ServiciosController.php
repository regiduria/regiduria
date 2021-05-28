<?php

namespace App\Http\Controllers;
use App\Models\Tramite;
use App\Models\Administradore;

use Illuminate\Http\Request;

class ServiciosController extends Controller
{
    public function index(Request $request){
        if($request){
            if( trim($request->get('fechatramite'))){
                $query= trim($request->get('fechatramite'));
                $tramites=Tramite::where('area','SERVICIOS MUNICIPALES')
                ->orderBy('fecha_tramite','desc')
                ->paginate();
                return view('servicios.index',compact('tramites','query'));

             }
             if( trim($request->get('fecharecibido'))){
                 $query= trim($request->get('fecharecibido'));
                 $tramites=Tramite::where('area','SERVICIOS MUNICIPALES')
                 ->orderBy('fecha_recibido','desc')
                 ->paginate();
                 return view('servicios.index',compact('tramites','query'));
              }

            $query= trim($request->get('search'));

            $tramites=Tramite::where('area','SERVICIOS MUNICIPALES')
            ->where('nombre_suscrito','LIKE','%'.$query.'%' )
            ->orWhere('area','SERVICIOS MUNICIPALES')
            ->where('numero_oficio','LIKE','%'.$query.'%')
            ->orWhere('area','SERVICIOS MUNICIPALES')
            ->where('tipo_tramite','LIKE','%'.$query.'%')
            ->orWhere('area','SERVICIOS MUNICIPALES')
            ->where('telefono','LIKE','%'.$query.'%')
            ->orWhere('area','SERVICIOS MUNICIPALES')
            ->where('fecha_tramite','LIKE','%'.$query.'%')
            ->orWhere('area','SERVICIOS MUNICIPALES')
            ->where('fecha_recibido','LIKE','%'.$query.'%')
            ->orderBy('id','desc')
            ->paginate();
            return view('servicios.index',compact('tramites','query'));
        }else{


        }
   }

   public function lugar(){
    return view('panteones.lugar');
  }

    public function administrador(){
    $administradores = Administradore::where('area','SERVICIOS MUNICIPALES') ->orderBy('id','desc')->paginate();
        return view('servicios.administrador',compact('administradores'));

}
}
