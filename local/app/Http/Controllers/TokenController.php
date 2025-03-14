<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class TokenController extends Controller
{
    public function create()
    {
       $vista = View::make('token');
       return $vista;
    }
}
