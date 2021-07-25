<?php

namespace App\Http\Controllers\Auth;


use App\Models\User;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends \App\Http\Controllers\Controller
{
    public function __construct()
    {
        $this->middleware("guest");
        $this->middleware("guest:web");
        $this->middleware("guest:admin");
    }

    public function showAdminRegisterForm()
    {
        return view("layouts.Auth.signup");
    }

    public function submitVendorRegisterForm(Request $request)
    {
        $this->validate($request, [
            'fname'   => 'required',
            'lname'   => 'required',
            'email'   => 'required|email|unique:admin',
            'password' => 'required|min:6|confirmed',
            'franchise'=>'required|unique:admin'
        ]);

        $data = [
            "name"=>$request->fname,
            "last_name"=>$request->lname,
            "email"=>$request->email,
            "password"=>Hash::make($request->password),
            "franchise"=>$request->franchise
        ];

        Admin::create($data);

        return redirect()->route("Admin")->with("success", "Registration success");
    }

    public function showUserRegisterForm()
    {
        return view("layouts.Auth.signup");
    }

    public function submitUserRegisterForm(Request $request)
    {
        $this->validate($request, [
            'fname'   => 'required',
            'lname'   => 'required',
            'email'   => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        $data = [
            "name"=>$request->fname,
            "last_name"=>$request->lname,
            "email"=>$request->email,
            "password"=>Hash::make($request->password),
        ];

        User::create($data);
        return redirect('/bars')->with("success", "Registration success");
    }
}

