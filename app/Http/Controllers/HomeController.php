<?php

namespace App\Http\Controllers;

use App\Models\Panteone;

use Illuminate\Http\Request;
use App\Http\Requests\StorePanteone;
use App\Models\Tramite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function __invoke(){

        return view('login');
      }
      public function index(){
          $id=auth()->user()->id;
          return $id;
        $tramites = Tramite::where('id',$id)
        ->orderBy('id','desc')->paginate();
     //   $data = ['tramites'  => $tramites,];
        return view('home',compact('tramites'));
         //      return view('home')->with($data);
            }

        public function login(Request $request){
            $crdenciales = request()->only('email', 'password');
            $eme=request()->only('email');

            if( Auth::attempt($crdenciales)){
                $user=User::where('email', $eme)->first();
                if($user->tipo =='ADMINISTRADOR'){
                    $request->session()->regenerate();
                    return redirect()->route('admin.index');
                }else
                $request->session()->regenerate();
                return redirect()->route('home.index');
            }else  return 'no lo estas';


        }

        public function logout(Request $request){
           Auth::logout();
           $request->session()->invalidate();
           $request->session()->regenerateToken();
           return redirect('/');
           }



        public function show(Tramite $tramite){
            return view('tramites.show',compact('tramite'));
           }


        public function register(){
           return view('auth.register');
         // return view('home',compact('panteones'));
        }

}
/*public function login(){
            $crdenciales = request()->only('email', 'password');
            $eme=request()->only('email');

            if( Auth::attempt($crdenciales)){
                $user=User::where('email', $eme)->first();
                if($user->tipo =='ADMINISTRADOR'){
                    return redirect()->route('admin.index');
                }else

                return redirect()->route('home.index');
            }else  return 'no lo estas';


        }*/
