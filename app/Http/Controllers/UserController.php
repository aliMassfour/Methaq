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
            'new_password' => 'required|min:6'
        ]);
        $user = auth()->user();
        if (Hash::check($request->get('current_password'), $user->password)) {
            $user->password = Hash::make($request->get('new_password'));
            if ($user->save()) {
                return redirect(route('admin.index'));
            }
        }
    }

    public function ChangeEmail(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',

        ]);
        $user = auth()->user();
        if (Hash::check($request->get('password'), $user->password)) {
            $user->email = $request->get('email');
            if ($user->save()) {
                return redirect(route('admin.index'));
            }
        }
    }
}
