<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Link;
use App\Models\Ui_design;
use App\Models\Categories;
use App\Models\comment;
use App\Models\Posts;

class PagesController extends Controller
{
    public function login(){
        $Ui_designs = Ui_design::where('id', '=', '1')->firstOrFail();

       return view('layouts.Auth.login', [
           'Ui_designs' => $Ui_designs,
       ]);
    }

    public function signUp(){
        $Ui_designs = Ui_design::where('id', '=', '1')->firstOrFail();

       return view('layouts.Auth.signup', [
           'Ui_designs' => $Ui_designs,
       ]);
    }

    //validation of comment and storing on db
    public function form(Request $request){
        //validate the post
        $request->validate([
            'Body' => 'required|unique:comment',
        ]);
        
        //$new_users_id = Auth::user()->id;
        $new_users_id = 1;

        //change it back when you do user auth
        $new_Posts = 2;
        //dd($Posts);
        

        //create a new comment
        $comment = comment::create([
            'posts_id' => $request->posts_id,
            'users_id' => $new_users_id,
            'Body'=>$request->input('Body')
        ]);

       
        //dd($comment)
        //find the post id and refresh
        $Posts = Posts::find( $request->posts_id);
        //loop through the post and echo it
        foreach($Posts->comment as $comments){
            $img = url(htmlspecialchars(stripslashes(trim('profile_pictures/Ellipse.png'))));
            $name = $Posts->user->name ?? 'Anonymous';
            $time = timeDifference($comments->created_at);
            echo"<div class='one-person-comment'>
                <div class='comment-img'>
                    <img src=$img alt=''>
                </div>
                <div class='brave'>
                    <div class='name-time'>
                        <h4>$name</h4>
                        <small> <i class='fas fa-eye'></i> $time </small>
                    </div>  
                <div class='the-comment'>
                    <p>$comments->Body </p>
                </div>
                </div>
            </div>";
        }
    }


    //newsletter validation  
    public function newsLetter(Request $request){
        dd('hi');
    }
}
