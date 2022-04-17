<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Rules\Uppercase;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $posts= Post::all(); //here is the Post is from Model 
         //dd($posts);  //this execute till this funtion
         return view('post.index',compact('posts')); //compact variable to show
    
         
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create'); 
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
            'Title'=> new Uppercase,
            'details'=>'required',
            'Password'=>'required|integer'
        ]);
        //if it is valid, it will proceed
        //if it is not valid, throw a exception
        Post::create([  // here post is a model and create is a function build in laravel
            'Email'=>$request->Email,
            'Password'=>$request->Password,
            'Title'=>$request->Title,
            'details'=>$request->details
        ]);
           return redirect()->route('post.index'); //We have used resource method thst's why route method .after clicking submit then it will come
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
         $data['post']=$post;             //here is the array data showing
         return view('post.show',$data);

       // return view('post.show', compact('post')); // here is the single data showing


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $data['post'] = $post;
        //dd($data);
        return view('post.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $data['title'] = $request->title;
        $data['details']= $request->details; //here is the title name is in database table attributes

        $post->update($data);
        
        return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('post.index');
    }
}
