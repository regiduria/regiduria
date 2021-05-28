<?php

namespace App\Policies;
use App\Models\Tramite;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TramitePolicy
{
    use HandlesAuthorization;

public function usuario(User $user,Tramite $tramite){
if($user->tipo == 'ADMINISTRADOR'){
    return true;
}else{ return false;}
}

}
