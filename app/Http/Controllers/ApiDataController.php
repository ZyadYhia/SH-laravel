<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ApiDataController extends Controller
{
    public function room(Request $request)
    {
        return response()->json([
            'message' => 'success',
            'light' => true,
            'window' => true,
        ]);
    }
    public function living(Request $request)
    {
        return response()->json([
            'message' => 'success',
            'light' => true,
            'door' => true,
            'temp' => true,
        ]);
    }
    public function kitchen(Request $request)
    {
        return response()->json([
            'message' => 'success',
            'light' => true,
            'window' => true,
            'gas' => true,
        ]);
    }
    public function garage(Request $request)
    {
        return response()->json([
            'message' => 'success',
            'light' => true,
            'door' => true,
        ]);
    }
    public function garden(Request $request)
    {
        return response()->json([
            'message' => 'success',
            'light' => true,
            'soil' => true,
        ]);
    }
    public function entrance(Request $request)
    {
        return response()->json([
            'message' => 'success',
            'light' => true,
        ]);
    }
    public function roomReceive(Request $request)
    {
        return response()->json([
            'message' => 'success',
            'light' => $request->light,
            'window' => $request->window,
        ]);
    }
}