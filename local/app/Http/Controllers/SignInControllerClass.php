<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class SignInControllerClass extends Controller
{
    public function show($request)
    {
    	// Validaciones
	    $validator = Validator::make($request->all(), [ 
		    'email' => 'required|email',
		    'password' => 'required'
		]);

		if ($validator->fails()) {
		    return response()->json([
		        'code' => 400,
		        'message' => $validator->errors()->first(),
		        'errors' => $validator->errors()
		    ], 400);
		}

        try {
            $user = DB::select("SELECT * FROM tbl_users WHERE email = ? AND password = ?", [$request->email, $request->password]);
            if (!$user) {
                return response()->json([
                    'code' => 404,
                    'message' => 'Email or password invalid.'
                ], 404);
            }

            return response()->json([
                'code' => 200,
                'message' => 'Usuario obtenido correctamente.',
                'data' => $user
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'code' => 500,
                'message' => 'Error al obtener usuario.',
                'error' => $e->getMessage()
            ], 500);
        }
    }  
}
