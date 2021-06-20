<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Link;
use App\Models\Ui_design;
use App\Models\Categories;

class PagesController extends Controller
{
    public function index(){
        $links = Link::all();
        $Categories = Categories::all();

        //dd($Categories);
        $Ui_designs = Ui_design::where('id', '=', '1')->firstOrFail();

        
        return view('pages.index', [
            'links' => $links,
            'Ui_designs'=> $Ui_designs,
            'Categories' => $Categories,
        ]);
    }
}
