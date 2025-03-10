<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class UsersCampaignsControllerClass extends Controller
{
    public function showByUserId($id)
    {
        try {

            $user = DB::select("SELECT * FROM tbl_users_campaigns WHERE id_user = ?", [session()->get('user_id')]); 
            
            return response()->json([
                'code' => 200,
                'message' => '[]',
                'data' => $user
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'code' => 500,
                'message' => 'Error al obtener campaña del usuario.',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
