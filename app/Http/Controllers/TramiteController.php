<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBorradore;
use App\Http\Requests\StoreTramite;
use App\Models\Borradore;
use App\Models\Tramite;
use App\Models\User;
use Illuminate\Http\Request;

class TramiteController extends Controller
{


      public function create(Request $request){
       // $this->authorize('usuario', $tramite);
        $tipo=auth()->user()->tipo;
        if($tipo == 'ADMINISTRADOR'){
            $narea= trim($request->get('nuevo'));
             // return $narea;
               return view('tramites.create',compact('narea'));
        }



             }


         public function store(Request $request, StoreTramite $reques, StoreBorradore $reque){
               // return $reques;
                if($request){
                $query= trim($request->get('enviar'));
                //return $query;
                if($query=="calcular"){

                    $tramite=Borradore::create(
                        [
                            'clave'=> $reque['clave'],
                            'area'=> $reque['area'],
                            'tipo_tramite'=> $reque['tipo_tramite'],
                            'numero_oficio'=> $reque['numero_oficio'],
                            'fecha_tramite'=> $reque['fecha_tramite'],
                            'fecha_recibido'=> $reque['fecha_recibido'],
                            'descripcion_tramite'=> $reque['descripcion_tramite'],
                            'nombre_suscrito'=> $reque['nombre_suscrito'],
                            'cargo'=> $reque['cargo'],
                            'telefono'=> $reque['telefono'],
                            'dirigido'=> $reque['dirigido'],
                            'cargo_dirigido'=> $reque['cargo_dirigido'],
                            'estado'=> $reque['estado'],
                            'lic_dirige'=> $reque['lic_dirige'],
                            'ubicacion'=> $reque['ubicacion'],
                            'nombre_carpeta'=> $reque['nombre_carpeta'],
                            'nc_carpeta'=> $reque['nc_carpeta'],
                            'observaciones'=> $reque['observaciones'],
                        ]
                    );
                    return redirect()->route('admin.index');
                 }
            else{

                $query1= trim($request->get('enviar2'));
                //este el proceso para eliminar un archivo borrador  si se ejecuta desde la vista borrador edit
                /*if($query1 != "eliminar"){
                    $reque=Borradore::find($query1);

                    $reque->delete();

                }*/
        $tramite= Tramite::create(
            [
                'clave'=> $reques['clave'],
                'area'=> $reques['area'],
                'tipo_tramite'=> $reques['tipo_tramite'],
                'numero_oficio'=> $reques['numero_oficio'],
                'fecha_tramite'=> $reques['fecha_tramite'],
                'fecha_recibido'=> $reques['fecha_recibido'],
                'descripcion_tramite'=> $reques['descripcion_tramite'],
                'nombre_suscrito'=> $reques['nombre_suscrito'],
                'cargo'=> $reques['cargo'],
                'telefono'=> $reques['telefono'],
                'dirigido'=> $reques['dirigido'],
                'cargo_dirigido'=> $reques['cargo_dirigido'],
                'estado'=> $reques['estado'],
                'lic_dirige'=> $reques['lic_dirige'],
                'ubicacion'=> $reques['ubicacion'],
                'nombre_carpeta'=> $reques['nombre_carpeta'],
                'nc_carpeta'=> $reques['nc_carpeta'],
                'observaciones'=> $reques['observaciones'],
            ]
        );


if($reques['area']=='PANTEONES'){  return redirect()->route('panteones.index');}
if($reques['area']=='BIENES'){  return redirect()->route('bienes.index');}
if($reques['area']=='MERCADOS'){  return redirect()->route('mercados.index');}
if($reques['area']=='COMERCIO EN VIA PUBLICA'){  return redirect()->route('publica.index');}
if($reques['area']=='SERVICIOS MUNICIPALES'){  return redirect()->route('servicios.index');}

        return redirect()->route('tramites.show',$tramite->id);
            }
        }else{ return "'NO SE ENCUENTRA LA RUTA'";}
      }

      public function show(Tramite $tramite){
       return view('tramites.show',compact('tramite'));
      }

      public function edit(Tramite $tramite){

        $this->authorize('usuario', $tramite);
        //$panteon = Panteone::find($id);
        return view('tramites.edit', compact('tramite'));
      }

      public function update(Request $request, Tramite $tramite){
        $this->authorize('usuario', $tramite);
        $request->validate([
            'tipo_tramite' => 'required',
            'nombre_suscrito'=> 'required',
            'estado'=> 'required',
            'ubicacion'=> 'required',
            'nombre_carpeta'=> 'required',
            ]) ;

            if($tramite->area=='PANTEONES'){
                $tramite->update($request->all());    return redirect()->route('panteones.index');
            }
            if($tramite->area=='BIENES'){
                $tramite->update($request->all());    return redirect()->route('bienes.index');
            }
            if($tramite->area=='SERVICIOS MUNICIPALES'){
                $tramite->update($request->all());    return redirect()->route('servicios.index');
            }
            if($tramite->area=='MERCADOS'){
                $tramite->update($request->all());    return redirect()->route('mercados.index');
            }
            if($tramite->area=='COMERCIO EN VIA PUBLICA'){
                $tramite->update($request->all());    return redirect()->route('publica.index');
            }
            else  return 'no lo estas';
             }

      public function destroy(Tramite $tramite,Request $request){
        $user1= trim($request->get('usuarioeliminartramite'));
       // return $user;
        $this->authorize('usuario', $tramite);
           if($user1!=''){
               $user=User::where('clave',$user1)->first();
             // return $user;
            $tramite->delete();
            return redirect()->route('usertramite.index',$user);
        }
            if($tramite->area=='PANTEONES'){
               $tramite->delete();
               return redirect()->route('panteones.index')->with('eliminar','ok');
           }
           if($tramite->area=='BIENES'){
               $tramite->delete();
               return redirect()->route('bienes.index')->with('eliminar','ok');
           }
           if($tramite->area=='SERVICIOS MUNICIPALES'){
               $tramite->delete();
               return redirect()->route('servicios.index')->with('eliminar','ok');
           }
           if($tramite->area=='MERCADOS'){
               $tramite->delete();
               return redirect()->route('mercados.index')->with('eliminar','ok');
           }
           if($tramite->area=='COMERCIO EN VIA PUBLICA'){
               $tramite->delete();
               return redirect()->route('publica.index')->with('eliminar','ok');
           }
           else  return 'no lo estas';
            //return redirect()->route('panteones.index');
              }

}
