<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Link;
use App\Models\Ui_design;
use App\Models\Categories;

class PagesController extends Controller
{
    public function signup(){
        $Ui_designs = Ui_design::where('id', '=', '1')->firstOrFail();

       return view('layouts.Auth.signup', [
           'Ui_designs' => $Ui_designs,
       ]);
    }
}
