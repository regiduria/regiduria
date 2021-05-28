<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreAdministradore;
use App\Models\Administradore;
use Illuminate\Http\Request;

class AdministradoresController extends Controller
{
    public function index(){
        $administradore= Administradore::orderBy('area','desc')

        ->paginate();
        return view('administradores.index',compact('administradore'));
  }

    public function create(Request $request){
        $narea= trim($request->get('nuevo'));
                  return view('administradores.create',compact('narea'));
            }


            public function store(StoreAdministradore $request){

                $administradore= Administradore::create($request->all());

                return redirect()->route('administradores.index');
              }


                public function show(Administradore $administradore){
                 return view('administradores.show',compact('administradore'));
              }

     public function edit(Administradore $administradore){
       //$panteon = Panteone::find($id);
       return view('administradores.edit', compact('administradore'));
     }

     public function update(Request $request, Administradore $administradore){
       /*$request->validate([
           'nombre' => 'required',
           'cargo'=> 'required',
           'lugar'=> 'required',
           'telefono'=> 'required',

           ]) ;
*/
if($administradore->area=='PANTEONES'){
    $administradore->update($request->all());    return redirect()->route('panteones.administrador');
}
if($administradore->area=='BIENES'){
    $administradore->update($request->all());    return redirect()->route('bienes.administrador');
}
if($administradore->area=='SERVICIOS MUNICIPALES'){
    $administradore->update($request->all());    return redirect()->route('servicios.administrador');
}
if($administradore->area=='MERCADOS'){
    $administradore->update($request->all());    return redirect()->route('mercados.administrador');
}
if($administradore->area=='COMERCIO EN VIA PUBLICA'){
    $administradore->update($request->all());    return redirect()->route('publica.administrador');
}

else  return 'no lo estas';
            }

     public function destroy(Request $reques,Administradore $administradore){
        //return $reques;
        if($reques){
            $query1= trim($reques->get('value2'));
            //return $query1;
            if($query1=='index'){
                $administradore->delete();
                return redirect()->route('administradores.index');
            }



         if($administradore->area=='PANTEONES'){
            $administradore->delete();
            return redirect()->route('panteones.administrador');
        }
        if($administradore->area=='BIENES'){
            $administradore->delete();
            return redirect()->route('bienes.administrador');
        }
        if($administradore->area=='SERVICIOS MUNICIPALES'){
            $administradore->delete();
            return redirect()->route('servicios.administrador');
        }
        if($administradore->area=='MERCADOS'){
            $administradore->delete();
            return redirect()->route('mercados.administrador');
        }
        if($administradore->area=='COMERCIO EN VIA PUBLICA'){
            $administradore->delete();
            return redirect()->route('publica.administrador');
        }
        else  return 'no lo estas';
         //return redirect()->route('panteones.administrador');
           }
        }
}
