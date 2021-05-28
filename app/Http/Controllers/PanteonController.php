<?php

namespace App\Http\Controllers;
use App\Models\Panteone;
use App\Models\Administradore;
use App\Models\Tramite;
use Illuminate\Http\Request;
use App\Http\Requests\StorePanteone;

use Illuminate\Support\ViewErrorBag;

class PanteonController extends Controller
{
  public function index( Request $request){

      if($request){

        if( trim($request->get('fechatramite'))){
            $query= trim($request->get('fechatramite'));
            $tramites=Tramite::where('area','PANTEONES')
            ->orderBy('fecha_tramite','desc')
            ->paginate();
            return view('panteones.index',compact('tramites','query'));

         }
         if( trim($request->get('fecharecibido'))){
             $query= trim($request->get('fechatramite'));
             $tramites=Tramite::where('area','PANTEONES')
             ->orderBy('fecha_recibido','desc')
             ->paginate();
             return view('panteones.index',compact('tramites','query'));
          }


          $query= trim($request->get('search'));
          $tramites=Tramite::where('area','PANTEONES')
          ->where('nombre_suscrito','LIKE','%'.$query.'%' )
          ->orWhere('area','PANTEONES')
          ->where('numero_oficio','LIKE','%'.$query.'%')
          ->orWhere('area','PANTEONES')
          ->where('tipo_tramite','LIKE','%'.$query.'%')
          ->orWhere('area','PANTEONES')
          ->where('telefono','LIKE','%'.$query.'%')
          ->orWhere('area','PANTEONES')
          ->where('fecha_tramite','LIKE','%'.$query.'%')
          ->orWhere('area','PANTEONES')
          ->where('fecha_recibido','LIKE','%'.$query.'%')
          ->orWhere('area','PANTEONES')
          ->where('clave','LIKE','%'.$query.'%')
          ->orWhere('area','PANTEONES')
          ->where('estado','LIKE','%'.$query.'%')
          ->orderBy('id','desc')
          ->paginate();
          return view('panteones.index',compact('tramites','query'));
      }else{


      }
  }
 /* public function indexbuscar( Request $request){

    if($request){
        $query= trim($request->get('search'));
       // $queryf=$request->get('fecha');
        $tramites=Tramite::where('nombre_suscrito','LIKE','%'.$query.'%' )
        ->where('area','PANTEONES')
        ->orWhere('numero_oficio','LIKE','%'.$query.'%')
        ->orWhere('tipo_tramite','LIKE','%'.$query.'%')
        ->orWhere('telefono','LIKE','%'.$query.'%')
        ->orWhere('fecha_tramite','LIKE','%'.$query.'%')
        ->orWhere('fecha_recibido','LIKE','%'.$query.'%')
        ->orWhere('dirigido','LIKE','%'.$query.'%')
        ->orderBy('id','desc')
        ->paginate();
        return view('panteones.index',compact('tramites','query'));
    }

}*/

     public function lugar(){
            return view('panteones.lugar');
          }

 public function administrador(){
    $administradores = Administradore::where('area','PANTEONES') ->orderBy('id','desc')->paginate();
    return view('panteones.administrador',compact('administradores'));

        }









}
