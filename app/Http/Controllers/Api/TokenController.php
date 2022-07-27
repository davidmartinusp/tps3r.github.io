<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;

class TokenController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
           'email' => 'required|email',
           'password' => 'required',
           'device_name' => 'required' 
        ]);
        $user = UserModel::where('email', $request->email)->first();
        if(!$user || !Hash::check($request->password, $user->password)){
            return response()->json([
                'message' => 'Invalid Credentials'
            ], 422);
        }
        $token = $user->createToken($request->device_name)->plainTextToken;
        return response()->json([
            'token' => $token
        ]);
    }
}
