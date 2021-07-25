<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Link;
use App\Models\Ui_design;
use App\Models\Categories;
use App\Models\Posts;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $links = Link::all();
        $Categories = Categories::all();

        //dd($Categories);
        $Ui_designs = Ui_design::where('id', '=', '1')->firstOrFail();

        //  $m  =  $Categories->posts()->get();

        //  dd($m);

        
        return view('pages.index', [
            'links' => $links,
            'Ui_designs'=> $Ui_designs,
            'Categories' => $Categories,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Ui_designs = Ui_design::where('id', '=', '1')->firstOrFail();
        $links = Link::all();
        $Categories = Categories::all();
        
        return view('Pages.create', [
            'Ui_designs'=> $Ui_designs,
            'links' => $links,
            'Categories' => $Categories,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:posts',
            'body' => 'required',
            'tags' => 'nullable',
            'image'=> 'required|mimes:png,jpg,jpeg|max:5048'
        ]);

        $Categories = Categories::create([
            'categories'=>$request->input('tags')
        ]);

        

        $newImageName = time() . '-' . $request->string . '.' . $request->image->extension();

        $request->image->move(public_path('images'), $newImageName);

        $newViews = 0;
        $newPublished = 1;
        $newUser_id = 1;
        $newCategories_id = 2;

        $Posts = Posts::create([
            'title'=>$request->input('title'),
            'user_id'=>  $newUser_id,
            'categories_id'=>$newCategories_id,
            'views'=>$newViews,
            'published'=>$newPublished,
            'body'=>$request->input('body'),
            'image_path'=>$newImageName,
        ]);

       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)

    {
        $Posts = Posts::find($id);
        $cat_id = $Posts->categories_id;
        $findCatName = Categories::find($cat_id);
        $CategoryName = $findCatName->category;
        // dd($findCatName->category);
        $links = Link::all();
        $Categories = Categories::all();
        $allPosts = Posts::all();
        $Ui_designs = Ui_design::where('id', '=', '1')->firstOrFail();
        
         //$Posts = Posts::find($id);
         //dd($id);

        return view('Pages.show', [
            'links' => $links,
            'Ui_designs'=> $Ui_designs,
            'Categories' => $Categories,
            'Posts' => $Posts,
            'CategoryName'=> $CategoryName,
            'allPosts' => $allPosts,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Ui_designs = Ui_design::where('id', '=', '1')->firstOrFail();
        $links = Link::all();
        $Posts = Posts::find($id);
        
        return view('Pages.edit', [
            'Ui_designs'=> $Ui_designs,
            'links' => $links,
            'Posts' => $Posts,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|unique:posts',
            'body' => 'required',
            'tags' => 'nullable',
            'image'=> 'required|mimes:png,jpg,jpeg|max:5048'
        ]);

        $newImageName = time() . '-' . $request->string . '.' . $request->image->extension();

        $request->image->move(public_path('images'), $newImageName);

        $Posts = Posts::create([
            'title'=>$request->input('title'),
            'body'=>$request->input('body'),
            'image_path'=>$newImageName,
        ]);

        return redirect('/cars');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Post = Posts::find($id);

        $Post->delete();

        return redirect('/bars');
    }
}
