<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    use \App\Http\HttpRequest\HttpRespons;
    public function ShowLoginView()
    {
        return view('service_works.login');
    }
    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);
        if (Auth::attempt($request->only('email', 'password'))) {
            $user = \App\Models\User::where('email', $request->only('email'))->first();
            $token = $user->createToken('Application token' . $user->name)->plainTextToken;
            $services = \App\Models\Service::all();
            return redirect(route('admin.index'))->with([
                'user' => $user,
                'token' => $token,
                'services' => $services
                // 'error' => 0
            ]);
        } else {
            return redirect(route('login'))->with([
                'error' => 1
            ]);
        }
    }
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect(route('login'));

        // if (Auth::check()) {
        //     if (Auth::user()->currentAccessToken()->delete()) {
        //         return $this->success([], 'logout success');
        //     }
        // }
    }
}
