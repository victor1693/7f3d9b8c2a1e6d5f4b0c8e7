<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
class HomeController extends Controller
{
    public function create()
    {
       $vista = View::make('home');
       return $vista;
    }
}
