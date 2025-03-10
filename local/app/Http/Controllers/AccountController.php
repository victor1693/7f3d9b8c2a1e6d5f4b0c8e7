<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use Illuminate\Support\Facades\Session;

class AccountController extends Controller
{
    protected $account;

    public function __construct()
    {
        $this->account = new AccountControllerClass();
    }

    public function store(Request $request)
    {
        $response = $this->account->store($request);
        $data = $response->getData(true);  

        if ($response->getStatusCode() !== 201) { 
            #session()->flash('errors', $data['message'] ?? []);  
            return redirect('verifyAccount')->withErrors($ $data['message'] ?? []); 
            #$vista = View::make('verifyAccount');
        	#return $vista;
        }
       	return redirect('/campaigns');       
    }

    public function indexNotVerified(Request $request)
	{
	    $response = $this->account->indexNotVerified($request);
	    $data = $response->getData(true);
	    
	    if ($response->getStatusCode() !== 200) {
	        return response()->json([
	            'success' => false,
	            'message' => $data['message'] ?? 'Error al verificar la cuenta',
	        ], $response->getStatusCode());
	    }
	    
	    return response()->json([
	        'success' => true,
	        'message' => 'Cuenta verificada correctamente',
	        'data' => $data,
	    ], 200);
	} 
} 
