<?php

namespace App\Http\Controllers;
use App\Models\Administradore;
use App\Models\Tramite;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index(){

        $id=auth()->user()->id;
      //  return $id;
      $tramites = Tramite::where('id',$id)
      ->orderBy('id','desc')->paginate();
   //   $data = ['tramites'  => $tramites,];
      return view('home.index',compact('tramites'));
       //      return view('home')->with($data);
      }



         public function lugar(){
                return view('home.lugar');
              }

     public function administrador(){
        $administradores = Administradore::orderBy('id','desc')->paginate();
        return view('home.administrador',compact('administradores'));

            }
}
