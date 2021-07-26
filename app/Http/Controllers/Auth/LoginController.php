<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Models\Ui_design;
use Illuminate\Support\Facades\Auth;

class LoginController extends \App\Http\Controllers\Controller
{
    public function __construct()
    {
        //a guest access every function except logout
        $this->middleware("guest")->except("logout");
        //a user access every function except logout
        $this->middleware("guest:web")->except("logout");
         //an admin access every function except logout
        $this->middleware("guest:admin")->except("logout");
    }

    public function showAdminLoginForm()
    {
        $Ui_designs = Ui_design::where('id', '=', '1')->firstOrFail();
        return view("layouts.Auth.login", [
            'Ui_designs' => $Ui_designs,
        ]);
    }

    public function submitAdminLoginForm(Request $request)
    {
        $request->validate([
            "email"=>'required|email',
            "password"=>"required"
        ]);

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            return redirect()->intended('/admin/dashboard');
        }

        return back()->withInput($request->only('email', 'remember'))->with("error", "Invalid login credentials");
    }

    public function showUserLoginForm()
    {
        $Ui_designs = Ui_design::where('id', '=', '1')->firstOrFail();
        return view("layouts.Auth.login", [
            'Ui_designs' => $Ui_designs,
        ]);
    }

    public function submitUserLoginForm(Request $request)
    {
        $request->validate([
            "email"=>'required|email',
            "password"=>"required"
        ]);

        if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            return redirect()->intended('/bars');
        }

        return back()->withInput($request->only('email', 'remember'))->with("error", "Invalid login credentials");
    }

    public function logout(){
        if(Auth::guard('admin')->check()){
            Auth::guard('admin')->logout();
        }
        else {
            Auth::logout();
        }
        return redirect()->back();
    }

    
}
