<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use Illuminate\Support\Facades\Session;

class SignInController extends Controller
{
    protected $user;
    protected $accounts;

    function __construct()
    {
        $this->user = new SignInControllerClass();
        $this->accounts = new AccountControllerClass();
    }

    public function index()
    {
        //
    }

    public function create()
    {
       $vista = View::make('signIn');
       return $vista;
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Request $request)
    {   

        $response = $this->user->show($request);
        $data = $response->getData(true);   

        if ($response->getStatusCode() !== 200) {
          return redirect()->back()->with('errors', $data['message'] ?? []);
        } 
 
        Session::put('user_id', $data['data'][0]['id']); 

        return Redirect('/campaigns'); 

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
