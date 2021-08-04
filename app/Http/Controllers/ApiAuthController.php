<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ApiAuthController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email|max:255',
            'password' => 'required|string|confirmed|min:5|max:30',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'message' => $validator->errors(),
            ]);
        }
        $access_token = Str::random(64);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'access_token' => $access_token,
        ]);
        return response()->json([
            'name' => $request->name,
            'email' => $request->email,
            'access_token' => $access_token,
            'message' => 'success',
        ]);
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|max:255',
            'password' => 'required|string|min:5|max:30',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'message' => $validator->errors(),
            ]);
        }
        $user = User::where('email', '=', $request->email)->first();
        if ($user !== null) {
            $passwordCorrect = Hash::check($request->password, $user->password);
            if ($passwordCorrect) {
                $access_token = Str::random(64);
                $user->Update([
                    'access_token' => $access_token,
                ]);
                return response()->json([
                    'message' => 'success',
                    'name' => $user->name,
                    'email' => $user->email,
                    'access_token' => $access_token,
                ]);
            } else {
                return response()->json([
                    'message' => 'password incorrect'
                ]);
            }
        } else {
            return response()->json([
                'message' => 'email not found'
            ]);
        }
    }

    public function logout(Request $request)
    {
        $access_token = $request->header('access_token');
        $user = User::where('access_token', '=', $access_token)->first();
        if ($user != null) {
            $user->update([
                'access_token' => null,
            ]);
            return response()->json([
                'message' => 'logged out'
            ]);
        }
        return response()->json([
            'message' => 'token not valid'
        ]);
    }
}
