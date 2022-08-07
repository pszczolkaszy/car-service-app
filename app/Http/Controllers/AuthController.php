<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;

class AuthController extends Controller
{
    /**
     * Store a newly created user in storage.
     *
     * @param  \App\Http\Requests\RegisterRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function register(RegisterRequest $request)
    {
        $validated_data = $request->validated();

        $user = User::create([
            'name' => $validated_data['name'],
            'email' => $validated_data['email'],
            'password' => bcrypt($validated_data['password']),
        ]);

        return response()->json([
            'status' => true,
            'message' => 'User Created Successfully',
            'token' => $user->createToken('API TOKEN')->plainTextToken,

        ], 201);
    }

    /**
     * Login specific user.
     *
     * @param  \App\Http\Requests\LoginRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function login(LoginRequest $request)
    {
        $validated_data = $request->validated();

        if (!auth()->attempt($validated_data)) {
            return response()->json([
                'status' => false,
                'message' => 'Invalid Credentials',
            ], 401);
        }

        $user = User::where('email', $validated_data['email'])->first();

        return response()->json([
            'status' => true,
            'message' => 'User Logged In Successfully',
            'token' => $user->createToken('API TOKEN')->plainTextToken,
        ], 200);
    }

    /**
     * Logout current user.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return response()->json([
            'status' => true,
            'message' => 'User Logged Out Successfully',
        ], 200);
    }
}
