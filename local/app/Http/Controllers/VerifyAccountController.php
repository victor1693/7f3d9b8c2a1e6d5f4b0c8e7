<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
class VerifyAccountController extends Controller
{
    public function create()
    {
       $vista = View::make('verifyAccount');
       return $vista;
    }
}
