<?php

namespace App\Http\Controllers\ApiData;

use App\Http\Controllers\Controller;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ApiPostDataController extends Controller
{
    public function room(Request $request)
    {
        $room = Room::where('id', '=', 1)->first();
        if ($room !== null) {

            $room->Update([
                'light' => $request->light,
                'window' => $request->window,
            ]);
            return response()->json([
                'message' => 'success',
                'light' => $room->light,
                'window' => $room->window,
            ]);
        } else {
            return response()->json([
                'message' => 'invalid!'
            ]);
        }
    }
}
