<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class CampaignControllerClass extends Controller
{
    public function index()
    {
        try {
            $users = DB::select("SELECT * FROM tbl_campaigns");

            return response()->json([
                'code' => 200,
                'message' => 'Campañas obtenidas correctamente.',
                'data' => $users
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'code' => 500,
                'message' => 'Error al obtener la campañas.',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function show($id)
    {
        try {
            $user = DB::select("SELECT * FROM tbl_campaigns WHERE id = ?", [$id]);

            if (!$user) {
                return response()->json([
                    'code' => 404,
                    'message' => 'Campaña no encontrada.'
                ], 404);
            }

            return response()->json([
                'code' => 200,
                'message' => 'Campaña obtenida correctamente.',
                'data' => $user
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'code' => 500,
                'message' => 'Error al obtener una nueva campaña.',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
