<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Administradore;
use App\Models\Borradore;
use App\Models\Tramite;
use App\Models\User;
use Illuminate\Database\Eloquent\SoftDeletes;

class AdminController extends Controller
{

    public function index( Request $request){

        if($request){
            //$query= trim($request->get('search'));
           if( $queryf=$request->get('año')){
              $tramites=Tramite::orderBy('fecha_tramite','desc')
              ->paginate(6);
                return view('admin.index',compact('tramites','query'));
           }
           if($query=$request->get('search')){
            $tramites=Tramite::where('nombre_suscrito','LIKE','%'.$query.'%' )
            ->orWhere('numero_oficio','LIKE','%'.$query.'%')
            ->orWhere('tipo_tramite','LIKE','%'.$query.'%')
            ->orWhere('telefono','LIKE','%'.$query.'%')
            ->orWhere('fecha_tramite','LIKE','%'.$query.'%')
            ->orWhere('fecha_recibido','LIKE','%'.$query.'%')
            ->orderBy('id','desc')
            ->paginate(6);
            return view('admin.index',compact('tramites','query'));
        }
            $tramites=Tramite::where('estado','URGENTE')
            ->orderBy('fecha_tramite','desc')
            ->paginate(6);
              return view('admin.index',compact('tramites','query'));
        }else{
            $tramites=Tramite::where('estado','URGENTE')
            ->orderBy('fecha_tramite','desc')
            ->paginate(6);
              return view('admin.index',compact('tramites','query'));

        }
    }

         public function lugar(){
                return view('admin.lugar');
              }

     public function usuarios(){
        $users=User::orderBy('id','desc')->paginate();
             return view('admin.usuarios',compact('users'));
      }
      public function borrados(){
          $tramites = Tramite::onlyTrashed()
         ->orderBy('id','desc')
         ->paginate();
//return $tramites;
            return view('admin.borrados',compact('tramites'));

      }

      public function show(Request $request )
      {

        $query= trim($request->get('ver'));
        //return $query;
        $tramites = Tramite::onlyTrashed()->where('id', $query)->get();

        //return $tramites;

        return view('admin.show',compact('tramites'));

      }

      public function restore(Request $request  ){
        //return $tramite;
        $query= trim($request->get('restaurar'));
        //return $query;
        $tramites = Tramite::onlyTrashed()->where('id', $query)->restore();

               return redirect()->route('admin.borrados')->with('restuarar','ok');
                       }
  public function borradores(Request $request  ){
    $tramites=Borradore::orderBy('id','desc')
    ->paginate();
    return view('admin.borrador.borradores',compact('tramites'));
                       }
  public function edit(Borradore $tramite  ){
    // return $tramite;
    //$this->authorize('usuario', $tramite);
    //$panteon = Panteone::find($id);

    return view('admin.borrador.edit', compact('tramite'));
      }
// esta funcions es la de borrarun elemento guardado en borrador
 public function destroy(Borradore $tramite){


                $tramite->delete();
               return redirect()->route('admin.borrador.borradores')->with('eliminar','ok');
           }
//este es de los eliminados
 public function destroyb(Tramite $tramite){

return $tramite;
                $tramite->delete();
               return redirect()->route('admin.borrados')->with('eliminar','ok');
           }
           public function volver(Request $request){
            $query= trim($request->get('volver'));
            switch ($query)
    {
    case "PANTEONES":
          return redirect()->route('panteones.index');
    case "BIENES":
         return redirect()->route('bienes.index');
   case "SERVICIOS MUNICIPALES":
         return redirect()->route('servicios.index');
    case "MERCADOS":
            return redirect()->route('mercados.index');
    case "COMERCIO EN VIA PUBLICA":
                return redirect()->route('publica.index');
    }


           }
}
