<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    use \App\Http\HttpRequest\HttpRespons;
    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);
        if (Auth::attempt($request->only('email', 'password'))) {
            $user = \App\Models\User::where('email', $request->only('email'))->first();
            $token = $user->createToken('Application token' . $user->name)->plainTextToken;
            return $this->success([
                'user' => $user,
                'token' => $token
            ]);
        } else {
            return $this->error([], 'user not found', 405);
        }
    }
    public function logout(Request $request)
    {

        if (Auth::check()) {
            if (Auth::user()->currentAccessToken()->delete()) {
                return $this->success([], 'logout success');
            }
        }
    }
}
