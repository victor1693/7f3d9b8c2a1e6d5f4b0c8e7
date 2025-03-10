<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use DB;
class AccountControllerClass extends Controller
{
	// Obtener todos los usuarios
    public function indexNotVerified()
    {
        try {
            $accounts = DB::select("SELECT uniqueId FROM tbl_accounts WHERE verified = 0");
            

            return response()->json([
                'code' => 200,
                'message' => 'Cuentas obtenidas correctamente.',
                'data' => $accounts
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'code' => 500,
                'message' => 'Error al obtener la cuenta.',
                'error' => $e->getMessage()
            ], 500);
        }
    }


    public function indexVerified()
    {
        try {
            $accounts = DB::select("SELECT uniqueId FROM tbl_accounts WHERE verified = 1 AND idUser = '".session()->get('user_id')."'");

            if (!$accounts) {
                return response()->json([
                    'code' => 404,
                    'message' => 'El usuario no tiene cuenta verificada o esta en espera por aprobación.'
                ], 404);
            }
            
            return response()->json([
                'code' => 200,
                'message' => 'Cuentas obtenidas correctamente.',
                'data' => $accounts
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'code' => 500,
                'message' => 'Error al obtener la cuenta.',
                'error' => $e->getMessage()
            ], 500);
        }
    }
	
	public function store(Request $request)
	{
	    // Validaciones
	   $validator = Validator::make($request->all(), [ 
		    'uniqueId' => 'required|string|max:75'
		]);

		if ($validator->fails()) {
		    return response()->json([
		        'code' => 400,
		        'message' => $validator->errors()->first(), // Obtiene el primer error
		        'errors' => $validator->errors()
		    ], 400);
		}
	    try {
	        // Verificar si el correo ya existe
	        $existingUser = DB::select("SELECT id FROM tbl_accounts WHERE uniqueId = ?", [$request->uniqueId]);

	        if (!empty($existingUser)) {
	            return response()->json([
	                'code' => 409, // Código 409 significa "Conflicto"
	                'message' => 'Ya esta cuenta esta registrada, intente con otra.'
	            ], 409);
	        }

	        // Insertar usuario en la base de datos
	       DB::insert("INSERT INTO tbl_accounts (uniqueId, idUser) VALUES (?, ?)", [$request->uniqueId, Session()->get('user_id')]);

	        
	        return response()->json([
	            'code' => 201,
	            'message' => 'Cuenta creada exitosamente.'
	        ], 201);

	    } catch (\Exception $e) {
	        return response()->json([
	            'code' => 500,
	            'message' => 'Error al crear crear la cuenta.',
	            'error' => $e->getMessage()
	        ], 500);
	    }
	}
}
 