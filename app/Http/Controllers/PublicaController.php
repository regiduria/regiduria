<?php

namespace App\Http\Controllers;
use App\Models\Tramite;
use App\Models\Administradore;
use Illuminate\Http\Request;

class PublicaController extends Controller
{
    public function index( Request $request){

        if($request){

            if( trim($request->get('fechatramite'))){
                $query= trim($request->get('fechatramite'));
                $tramites=Tramite::where('area','COMERCIO EN VIA PUBLICA')
                ->orderBy('fecha_tramite','desc')
                ->paginate();
                return view('publica.index',compact('tramites','query'));

             }
             if( trim($request->get('fecharecibido'))){
                 $query= trim($request->get('fecharecibido'));
                 $tramites=Tramite::where('area','COMERCIO EN VIA PUBLICA')
                 ->orderBy('fecha_recibido','desc')
                 ->paginate();
                 return view('publica.index',compact('tramites','query'));
              }



            $query= trim($request->get('search'));

            $tramites=Tramite::where('area','COMERCIO EN VIA PUBLICA')
            ->where('nombre_suscrito','LIKE','%'.$query.'%' )
            ->orWhere('area','COMERCIO EN VIA PUBLICA')
            ->where('numero_oficio','LIKE','%'.$query.'%')
            ->orWhere('area','COMERCIO EN VIA PUBLICA')
            ->where('tipo_tramite','LIKE','%'.$query.'%')
            ->orWhere('area','COMERCIO EN VIA PUBLICA')
            ->where('telefono','LIKE','%'.$query.'%')
            ->orWhere('area','COMERCIO EN VIA PUBLICA')
            ->where('fecha_tramite','LIKE','%'.$query.'%')
            ->orWhere('area','COMERCIO EN VIA PUBLICA')
            ->where('fecha_recibido','LIKE','%'.$query.'%')
            ->orderBy('id','desc')
            ->paginate();
            return view('publica.index',compact('tramites','query'));
        }else{


        }
    }
      public function lugar(){
        return view('panteones.lugar');
      }

        public function administrador(){
        $administradores = Administradore::where('area','COMERCIO EN VIA PUBLICA')->orderBy('id','desc')->paginate();
            return view('publica.administrador',compact('administradores'));

    }
}
