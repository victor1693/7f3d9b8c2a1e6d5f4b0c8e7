<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use Illuminate\Support\Facades\Session;
 

class UserController extends Controller
{
    protected $user;

    public function __construct()
    {
        $this->user = new UserControllerClass();
    }

    public function index() # NO SE USA
    {
        $response = $this->user->index();
        $data = $response->getData(true); // Obtener datos del JSON

        if ($response->getStatusCode() !== 200) {
            session()->flash('errors', $data['message'] ?? []);
        }

        $vista = View::make('users.index')->with('users', $data['data'] ?? []);
        return $vista;
    } 

    public function show($id) # NO SE USA
    {
        $response = $this->user->show($id);
        $data = $response->getData(true);

        if ($response->getStatusCode() !== 200) { 
            session()->flash('errors', $data['message'] ?? []);
        }

        $vista = View::make('users.show')->with('user', $data['data'] ?? null);
        return $vista;
    }

    public function create() # NO SE USA
    {
        $vista = View::make('users.create');
        return $vista;
    }

    public function store(Request $request)
    { 
        $response = $this->user->store($request); 
        $data = $response->getData(true);  
       

        if ($response->getStatusCode() !== 201) { 
            session()->flash('errors', $data['message'] ?? []);  
            $vista = View::make('signUp');
        	return $vista;
        }
       	return redirect('/verifyAccount');       
    }

    public function edit($id) # NO SE USA
    {
        $response = $this->user->show($id);
        $data = $response->getData(true);

        if ($response->getStatusCode() !== 200) {
            session()->flash('errors', $data['message'] ?? []);
        }

        $vista = View::make('users.edit')->with('user', $data['data'] ?? null);
        return $vista;
    }

    public function update(Request $request, $id) # NO SE USA
    {
        $response = $this->user->update($request, $id);
        $data = $response->getData(true);

        if ($response->getStatusCode() !== 200) {
            session()->flash('errors', $data['message'] ?? []);
        }

        $vista = View::make('users.edit'); # NO SE USA
        return $vista;
    }

    public function destroy($id) # NO SE USA
    {
        $response = $this->user->destroy($id);
        $data = $response->getData(true);

        if ($response->getStatusCode() !== 200) {
            session()->flash('errors', $data['message'] ?? []);
        }

        $vista = View::make('users.index'); # NO SE USA
        return $vista;
    }
}
 