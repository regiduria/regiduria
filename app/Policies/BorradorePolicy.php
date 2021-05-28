<?php

namespace App\Policies;

use App\Models\Borradore;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class BorradorePolicy
{
    use HandlesAuthorization;

    public function usuario(User $user,Borradore $tramite){
        if($user->tipo == 'ADMINISTRADOR'){
            return true;
        }else{ return false;}
        }
}
