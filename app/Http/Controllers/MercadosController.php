<?php

namespace App\Http\Controllers;
use App\Models\Tramite;
use App\Models\Administradore;
use Illuminate\Http\Request;

class MercadosController extends Controller
{

    public function index(Request $request){

        if($request){

            if( trim($request->get('fechatramite'))){
                $query= trim($request->get('fechatramite'));
                $tramites=Tramite::where('area','MERCADOS')
                ->orderBy('fecha_tramite','desc')
                ->paginate();
                return view('mercados.index',compact('tramites','query'));

             }
             if( trim($request->get('fecharecibido'))){
                 $query= trim($request->get('fecharecibido'));
                 $tramites=Tramite::where('area','MERCADOS')
                 ->orderBy('fecha_recibido','desc')
                 ->paginate();
                 return view('mercados.index',compact('tramites','query'));
              }



            $query= trim($request->get('search'));


            $tramites=Tramite::where('area','MERCADOS')
            ->where('nombre_suscrito','LIKE','%'.$query.'%' )
            ->orWhere('area','MERCADOS')
            ->where('numero_oficio','LIKE','%'.$query.'%')
            ->orWhere('area','MERCADOS')
            ->where('tipo_tramite','LIKE','%'.$query.'%')
            ->orWhere('area','MERCADOS')
            ->where('telefono','LIKE','%'.$query.'%')
            ->orWhere('area','MERCADOS')
            ->where('fecha_tramite','LIKE','%'.$query.'%')
            ->orWhere('area','MERCADOS')
            ->where('fecha_recibido','LIKE','%'.$query.'%')
            ->orderBy('id','desc')
            ->paginate();
            return view('mercados.index',compact('tramites','query'));
        }else{


        }
      }

      public function lugar(){
        return view('panteones.lugar');
      }

        public function administrador(){
        $administradores = Administradore::where('area','MERCADOS')->orderBy('id','desc')->paginate();
            return view('mercados.administrador',compact('administradores'));

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

            ->orderBy('id','desc')
            ->paginate();
            return view('panteones.index',compact('tramites','query'));
        }

    }*/
}
