<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $services = \App\Models\Service::all();
        return view('service_works.services')->with([
            'services' => $services
        ]);
    }
    public function setting()
    {
        return view('service_works.setting');
    }
    public function ChangeEmailView()
    {
        return view('service_works.ChangeEmail');
    }
    public function ChangePasswordView()
    {
        return view('service_works.ChangePassword');
    }
}
