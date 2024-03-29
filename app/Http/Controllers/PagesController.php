<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Link;
use App\Models\Ui_design;
use App\Models\Categories;
use App\Models\comment;
use App\Models\Posts;
use App\Models\newsletter;
use App\Models\coverImage;
use App\Models\profileImage;

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
        
        $new_users_id = Auth::user()->id;

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
            $time = ago($comments->created_at);
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
        $request->validate([
            'body' => 'required|unique:newsletter',
        ]);

        $user_id = 1;

        $newsLetter = newsletter::create([
            'users_id' => $user_id,
            'body'=> $request->input('body')
        ]);

        if($newsLetter){
            $response = [
                'success'=> 'Email saved'
            ];
            echo json_encode($response);
        }
        else {
            $response = [
                'failure'=> 'Invalid email format or email already exists'
            ];
            echo json_encode($response);
        }
        

    }

    public function userProfile(){
        $Categories = Categories::all();
        $Ui_designs = Ui_design::where('id', '=', '1')->firstOrFail();
        $links = Link::all();
        $User = Auth::user();
        $coverImage = $User->coverImage->image_path;
        $profileImage = $User->profileImage->image_path;
        //dd($profileImage);
        return view('Pages.profile', [
            'Categories' => $Categories,
            'Ui_designs' => $Ui_designs,
            'links' => $links,
            'User' => $User,
            'coverImage' => $coverImage,
            'profileImage' => $profileImage,
        ]);
    }

    public function coverImage(Request $request, $path){
        ///validate
        $request->validate([
            'image' => 'required|mimes:png,jpg,jpeg|max:5048',
        ]); 

        //dd($path);
         //fetch and create an extension for the cover image
         $newCoverImage = Auth::user()->name . Auth::user()->last_name . "cover_image" . time() . '-' . $request->string . '.' . $request->image->extension();
         $request->image->move(public_path('cover_image'), $newCoverImage);

        if(is_null($path)){
            //store it
            $coverImage = coverImage::create([
            'users_id' => Auth::user()->id,
            'image_path' => $newCoverImage
            ]);
        }
        else {
            coverImage::where('users_id',Auth::user()->id)
                ->update(['users_id'=>Auth::user()->id, 
                          'image_path' => $newCoverImage]);
        }
         
         $img = url(htmlspecialchars(stripslashes(trim('cover_image/'. $newCoverImage))));

        echo "<img src=$img>
              <label for='my-profile-cover-img'><i class='fas fa-pencil-alt'></i></label>";
    }



    public function profileImage(Request $request, $path){
        //validate
        $request->validate([
            'image' => 'required|mimes:png,jpg,jpeg|max:5048',
        ]);

       
         //fetch and create an extension for the cover image
        $newProfileImage = Auth::user()->name . Auth::user()->last_name . "profile_image" . time() . '-' . $request->string . '.' . $request->image->extension();
        $request->image->move(public_path('profile_pictures'), $newProfileImage);

        if(is_null($path)){
            //create and store it
            $profileImage = profileImage::create([
                'users_id' => Auth::user()->id,
                'image_path' => $newProfileImage
            ]);
        }
        else {
            //edit and store it
            profileImage::where('users_id',Auth::user()->id)
                ->update(['users_id'=>Auth::user()->id, 
                          'image_path' => $newProfileImage]);
        }
       
        $img = url(htmlspecialchars(stripslashes(trim('profile_pictures/'. $newProfileImage))));
        echo "<img src=$img>
              <label for='my-profile-img'><i class='fas fa-pencil-alt'></i></label>";
    }

    public function userDetails(Request $request, $users_id){
        $request->validate([
            'about' => 'required',
            'location' => 'nullable',
            'birthday' => 'nullable',
        ]);

        if(is_null($users_id)){
            //create and store it
            $userDetails = userDetails::create([
                'users_id' => Auth::user()->id,
                'about' => $request->input('about'),
                'location' => $request->input('location'),
                'birthday' => $request->input('birthday'),
            ]);
        }
        else {
            //edit and store it
            userDetails::where('users_id',Auth::user()->id)
                ->update(['users_id'=>Auth::user()->id, 
                'about' => $request->input('about'),
                'location' => $request->input('location'),
                'birthday' => $request->input('birthday'),]);
        }
    }
}
