<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class SignOutController extends Controller
{
    public function signOut()
    {
    	Session::flush(); 
    	return Redirect('verifyAccount');
    }
}
