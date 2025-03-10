<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class ProfileController extends Controller
{
    public function general()
    {
       $vista = View::make('profile-general');
       return $vista;
    }

    public function cuentas()
    {
       $vista = View::make('profile-cuentas');
       return $vista;
    }

    public function seguridad()
    {
       $vista = View::make('profile-seguridad');
       return $vista;
    }
}
 
