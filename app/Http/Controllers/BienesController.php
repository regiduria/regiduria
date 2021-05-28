<?php

namespace App\Http\Controllers;
use App\Models\Tramite;
use App\Models\Administradore;
use Illuminate\Http\Request;

class BienesController extends Controller
{
    public function index( Request $request){

        if($request){



            if( trim($request->get('fechatramite'))){
                $query= trim($request->get('fechatramite'));
                $tramites=Tramite::where('area','BIENES')
                ->orderBy('fecha_tramite','desc')
                ->paginate();
                return view('bienes.index',compact('tramites','query'));

             }
             if( trim($request->get('fecharecibido'))){
                 $query= trim($request->get('fecharecibido'));
                 $tramites=Tramite::where('area','BIENES')
                 ->orderBy('fecha_recibido','desc')
                 ->paginate();
                 return view('bienes.index',compact('tramites','query'));
              }


            $query= trim($request->get('search'));
            $tramites=Tramite::where('area','BIENES')
            ->where('nombre_suscrito','LIKE','%'.$query.'%' )
            ->orWhere('area','BIENES')
            ->where('numero_oficio','LIKE','%'.$query.'%')
            ->orWhere('area','BIENES')
            ->where('tipo_tramite','LIKE','%'.$query.'%')
            ->orWhere('area','BIENES')
            ->where('telefono','LIKE','%'.$query.'%')
            ->orWhere('area','BIENES')
            ->where('fecha_tramite','LIKE','%'.$query.'%')
            ->orWhere('area','BIENES')
            ->where('fecha_recibido','LIKE','%'.$query.'%')
            ->orderBy('id','desc')
            ->paginate();
            return view('bienes.index',compact('tramites','query'));
        }else{


        }
    }
      public function lugar(){
        return view('bienes.lugar');
      }

public function administrador(){
$administradores = Administradore::where('area','BIENES')->orderBy('id','desc')->paginate();
return view('bienes.administrador',compact('administradores'));

    }
}
