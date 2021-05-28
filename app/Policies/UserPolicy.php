<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    public function usuario(User $user,User $users){
    if($user->tipo == 'ADMINISTRADOR'){
        return true;
    }else{ return false;}
    }
}
