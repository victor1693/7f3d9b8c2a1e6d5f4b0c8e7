<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class RegisterController extends Controller
{
    public function create()
    {
       $vista = View::make('register');
       return $vista;
    }
}
