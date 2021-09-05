<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
//use Carbon\Carbon;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required',
            'password' => 'required|min:8',
            'nim' => 'required|unique:users',
            'nama' => 'required',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);
        $validatedData['role'] = 'user';

        User::create($validatedData);
        return response()->json(['message' => 'user has been registered'], 200);
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required|string'
        ]);

        $credentials = request(['email', 'password']);

        if(!Auth::attempt($credentials)) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }
        
        $accessToken = $request->user()->createToken('authToken')->accessToken;

        return response()->json(['user' => Auth::user(), 'access_token' => $accessToken]);
    }

    public function getUserLogin()
    {
        return response()->json(['user' => Auth::user()]);
    }

    public function logout(Request $request)
    {
        $request->user()->token()->delete();
        return response()->json(['messege' => 'log out success']);
    }
}
