<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use \App\Http\HttpRequest\HttpRespons;

class UserController extends Controller
{
    use HttpRespons;
    public function ChangePassword(Request $request)
    {
        $this->validate($request, [
            'current_password' => 'required',
            'new_password' => 'required|max:8|min:6'
        ]);
        $user = auth()->user();
        if (Hash::check($request->get('current_password'), $user->password)) {
            $user->password = Hash::make($request->get('new_password'));
            if ($user->save()) {
                return $this->success([], 'change the password successfully');
            } else {
                return $this->error([], 'wrong happened please again', 500);
            }
        } else {
            return $this->error([], 'current password is not correct', 401);
        }
    }

    public function ChangeEmial(Request $request)
    {
        $this->validate($request, [
            'password' => 'required',
            'email' => 'required|email'
        ]);
        $user = auth()->user();
        if (Hash::check($request->get('password'), $user->password)) {
            $user->email = $request->get('email');
            if ($user->save()) {
                return $this->success([], 'change the email successfully');
            } else {
                return $this->error([], 'wrong happened please try agian', 500);
            }
        } else {
            return $this->error([], 'password is not currect', 401);
        }
    }
}
