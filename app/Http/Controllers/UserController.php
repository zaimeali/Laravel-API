<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(Request $request)
    {
        // return [
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password)
        // ];
        return User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
    }


    public function login(Request $request)
    {
        // $credential = [
        //     'email' => $request->email,
        //     'password' => $request->password
        // ];

        $credential = request()->only(['email', 'password']);

        $token = Auth::attempt($credential);

        return $token;
    }

    public function getAuthUser()
    {
        return auth()->user();
    }
}
