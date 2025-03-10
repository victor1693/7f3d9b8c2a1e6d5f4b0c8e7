<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
class SignUpController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
       $vista = View::make('signUp');
       return $vista;
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
