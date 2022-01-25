<?php

namespace App\Http\Controllers;

use App\Models\Post;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::All();
        return view('posts.index', compact('posts'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
        //
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
            'title' => 'required',
            'description' => 'required',
            'group_name' => 'required',
            
        ]);

        //'group_name' => 'required'
        $post = new Post();
        $post->user_id=Auth::id();
        $post->title=$request->input('title');
        $post->description=$request->input('description');
        $post->group_name=$request->input('group_name');
        $post->save();
        $posts = Post::All();
        return view('posts.index', compact('posts'));
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $post = Post::find($id);
        
       
        
        return view('posts.show', ["post"=>$post]);
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $post = Post::find($id);
        
       
        
        return view('posts.edit', ["post"=>$post]);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $post = Post::find($id);
        $request->validate([
            'title' => 'required',
            'description' => 'required',
       
            
        ]);

      
        
      
        $post->title=$request->input('title');
        $post->description=$request->input('description');
      
        $post->save();
        $post->update();
        $posts = Post::All();
        
        return view('posts.index', compact('posts'));
        //
    }
        //
    public function delete(Request $request, $id)
    {
        $post = Post::find($id);
        
       
        
        return view('posts.delete', ["post"=>$post]);
    
            //
    
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post, $id)
    {
        
        $post = Post::find($id);
        $post->delete();
        //return redirect('/');
        //

        //
    }
}
