<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUser;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $users=User::orderBy('id','desc')->paginate();
        return view('auth.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $users= auth()->user()->tipo ;
      if($users == 'ADMINISTRADOR'){
        return view( 'auth.create');
      }else return 'accion no permitida';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( StoreUser $data)
    {

//dd( $data ->file('avatar')->store('public'));
      $sami= User::create(
          [
            'clave' => $data['clave'],
            'name' => $data['name'],
            'email' => $data['email'],
            'email_verified_at' => now(),
            'password' => Hash::make($data['password']),

            'tipo'=> $data['tipo'],
            'telefono' =>$data['telefono'],
            'avatar'=> $data['avatar'],
            'remember_token' => Str::random(10),
        ]
    );
         return redirect()->route('auth.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $users)
    {
        return view('admin.users.show',compact('users'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $auth)
    {
        $this->authorize('usuario',$auth);
      // $role= Role::all();
        return view('auth.edit', compact('auth'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $auth)
    {

        $this->authorize('usuario',$auth);
        $auth->update([
            'name' => $request['name'],
            'email' => $request['email'],
            'email_verified_at' => now(),
            'password' => Hash::make($request['password']),

            'tipo'=> $request['tipo'],
            'telefono' =>$request['telefono'],


        ]);
        return redirect()->route('auth.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $auth)
    {

       // return $users;
        $this->authorize('usuario',$auth);
        $auth->delete();
        return redirect()->route('auth.index')->with('eliminar','ok');
    }
}
