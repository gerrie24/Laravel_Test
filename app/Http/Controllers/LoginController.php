<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function login(Request $request)
    {
        $userData = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|min:8'
        ]);

        if (!Auth::attempt($request->all())) {
            return response()->json(['error' => 'Invalid User']);
        }

        $user = Auth::guard('web')->user();

        $token = $user->createToken('API Token')->plainTextToken;

        return response()->json([
            'token' => $token,
        ]);
    }

    public function register(Request $request)
    {
        $userData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users,email',
            'password' => 'required|min:8'
        ]);


        User::create([
            'name' => $userData['name'],
            'email' => $userData['email'],
            'password' => Hash::make($userData['password'])
        ]);

        return response()->json(['data' => 'user created']);
    }
}
