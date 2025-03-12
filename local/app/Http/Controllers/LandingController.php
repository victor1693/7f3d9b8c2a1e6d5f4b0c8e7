<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class LandingController extends Controller
{
    public function create()
    {
       $vista = View::make('landing');
       return $vista;
    }
}
