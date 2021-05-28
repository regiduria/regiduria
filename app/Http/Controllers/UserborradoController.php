<?php

namespace App\Http\Controllers;

use App\Models\Administradore;
use App\Models\User;
use Illuminate\Http\Request;

class UserborradoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::onlyTrashed()
         ->orderBy('id','desc')
         ->paginate();
         return view('usuariosborrados.index',compact('users'));
    }

    public function administradores()
    {
        $users = Administradore::onlyTrashed()
         ->orderBy('id','desc')
         ->paginate();
         return view('usuariosborrados.administradores',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function restore(Request $request  ){
        //return $tramite;
        $query= trim($request->get('restaurar'));
        //return $query;
        $users = User::onlyTrashed()->where('id', $query)->restore();

               return redirect()->route('usuariosborrados.index')->with('restuarar','ok');
         }
         public function restaurar(Request $request  ){
            //return $tramite;
            $query= trim($request->get('restaurar'));
            //return $query;
            $users = Administradore::onlyTrashed()->where('id', $query)->restore();

                   return redirect()->route('usuariosborrados.administradores')->with('restuarar','ok');
             }
}
