<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserLoginRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{


    public function login(UserLoginRequest $request): JsonResponse
    {
        $success = Auth::attempt($request->only(['email', 'password']));
        if (!$success) {
            return response()->json(['success'=>false,"message" => "error en credenciales"], 401);
        }
        /** @var \App\Models\MyUserModel $user **/
        $user = Auth::user();
        $isEmailVerified = $user->hasVerifiedEmail();
        if (!$isEmailVerified) {
            return response()->json(['success'=>false,"message" => "El correo electrónico no está confirmado"], 403);
        }

        $user->tokens()->delete();
        $token = $user->createToken("API TOKEN")->plainTextToken;
        
        return response()->json([
            'success'=>true,
            'message' => 'Se logeo correctamente',
            "token" => $token
        ], 200);
    }



    public function register(UserLoginRequest $request): JsonResponse
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        $user->assignRole('client');

        return response()->json(['success'=>true,"message" => 'se registro correctamente'], 200);
    }


    public function dashboard()
    {
        /** @var \App\Models\MyUserModel $user **/
        $user = Auth::user();
        
        $token = $user->tokens("API TOKEN")->first()->token;
         
        return view('dashboard', ['tokens' => $token]);
    }


    public function nuevoToken()
    {
        /** @var \App\Models\MyUserModel $user **/
        $user = Auth::user();
        $user->tokens()->delete();
        $user->createToken("API TOKEN");
        return redirect()->route('dashboard');
    }
}