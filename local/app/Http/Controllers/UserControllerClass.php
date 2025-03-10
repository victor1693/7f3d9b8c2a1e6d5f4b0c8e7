<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class UserControllerClass extends Controller
{
    // Obtener todos los usuarios
    public function index()
    {
        try {
            $users = DB::select("SELECT * FROM tbl_users");

            return response()->json([
                'code' => 200,
                'message' => 'Usuarios obtenidos correctamente.',
                'data' => $users
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'code' => 500,
                'message' => 'Error al obtener usuarios.',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    // Obtener un usuario por ID
    public function show($id)
    {
        try {
            $user = DB::select("SELECT * FROM tbl_users WHERE id = ?", [$id]);

            if (!$user) {
                return response()->json([
                    'code' => 404,
                    'message' => 'Usuario no encontrado.'
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

    // Crear un nuevo usuario
    public function store(Request $request)
	{
	    // Validaciones
	   $validator = Validator::make($request->all(), [ 
		    'email' => 'required|email|max:75',
		    'password' => 'required|string|min:6|max:25',
		    'birthday' => 'required|date',
		    'country' => 'required|string|max:25',
		    'iam' => 'required|string|max:25'
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
	        $existingUser = DB::select("SELECT id FROM tbl_users WHERE email = ?", [$request->email]);
            
	        if (!empty($existingUser)) {
	            return response()->json([
	                'code' => 409,  
	                'message' => 'El correo ya está registrado. Intenta con otro.'
	            ], 409);
	        }

	        // Insertar usuario en la base de datos
	        DB::insert("INSERT INTO tbl_users (platform, email, password, birthday, country, iam, created) VALUES (?, ?, ?, ?, ?, ?, NOW())", [
	           'clippr',
	            $request->email,
	            ($request->password), // Se cifra la contraseña
	            $request->birthday,
	            $request->country,
	            $request->iam
	        ]);

	        // Obtener el ID del usuario recién creado
	        $userId = DB::getPdo()->lastInsertId(); 

	        // Almacenar el usuario creado internamente (sin retornarlo en la respuesta) 

	        Session::put('user_id', $userId);			 
	        
	        return response()->json([
	            'code' => 201, 
	            'message' => 'Usuario creado exitosamente.'
	        ], 201);

	    } catch (\Exception $e) {
	        return response()->json([
	            'code' => 500,
	            'message' => 'Error al crear usuario.',
	            'error' => $e->getMessage()
	        ], 500);
	    }
	}


    // Actualizar un usuario existente
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'platform' => 'sometimes|string|max:25',
            'email' => 'sometimes|email|max:75|unique:tbl_users,email,' . $id,
            'password' => 'sometimes|string|min:6|max:25',
            'birthday' => 'sometimes|date',
            'country' => 'sometimes|string|max:25',
            'iam' => 'sometimes|string|max:25'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'code' => 400,
                'message' => 'Errores de validación.',
                'errors' => $validator->errors()
            ], 400);
        }

        try {
            $updateData = array_filter([
                'platform' => $request->platform,
                'email' => $request->email,
                'password' => $request->password ? bcrypt($request->password) : null,
                'birthday' => $request->birthday,
                'country' => $request->country,
                'iam' => $request->iam
            ]);

            $setQuery = implode(', ', array_map(fn ($key) => "$key = ?", array_keys($updateData)));
            $values = array_values($updateData);
            $values[] = $id;

            DB::update("UPDATE tbl_users SET $setQuery WHERE id = ?", $values);

            return response()->json([
                'code' => 200,
                'message' => 'Usuario actualizado correctamente.'
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'code' => 500,
                'message' => 'Error al actualizar usuario.',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    // Eliminar un usuario
    public function destroy($id)
    {
        try {
            DB::delete("DELETE FROM tbl_users WHERE id = ?", [$id]);

            return response()->json([
                'code' => 200,
                'message' => 'Usuario eliminado correctamente.'
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'code' => 500,
                'message' => 'Error al eliminar usuario.',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
