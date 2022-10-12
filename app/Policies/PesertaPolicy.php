<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PesertaPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function checkpeserta(User $user)
    {
      return ($user->sebagai == 'peserta' 
            ? Response::allow() 
            : Response::deny('Mohon maaf, silahkan anda melakukan registrasi terlebih dahulu')
      );
    }
}
