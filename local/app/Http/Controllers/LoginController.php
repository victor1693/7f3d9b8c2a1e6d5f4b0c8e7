<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class LoginController extends Controller
{
    public function create()
    {
       $vista = View::make('login');
       return $vista;
    }
}
