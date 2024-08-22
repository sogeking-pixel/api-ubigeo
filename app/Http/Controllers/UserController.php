<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserLoginRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    
   

   
    public function login(UserLoginRequest $request):JsonResponse
    {
        $success = Auth::attempt($request->only(['email','password']));
        if(!$success){
          return response()->json(["message"=>"error en credenciales"], 401);  
        }
        $user = Auth::user();
        $user->tokens()->delete();
        
        return response()->json(['message'=>'Se logeo correctamente',
                                "token"=>$user->createToken("API TOKEN")->plainTextToken], 200);        
    
    }

    

    public function register(UserLoginRequest $request):JsonResponse
    {
        $user = User::create([
            'name'=> $request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)
        ]);

        $user->assignRole('client');

        return response()->json(["message"=>'se registro correctamente'], 200);
    }

    
}