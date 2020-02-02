<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BlogPost;

class BlogController extends Controller
{
    
    public function index(){
        $posts = BlogPost::all();
        return view('blog.index', ['posts' => $posts]);      
    }

    public function show(BlogPost $post){
        return view('blog.show', [
            'post' =>$post
        ]);
    }

    public function create(){
        return view('blog.create');
    }

    public function store(Request $request){

        if(! $validatedData = $request->validate([
            'title'   => 'required',
            'slug'    => 'required|unique:blog_posts|max:255',
            'body'    => 'required',
            'excerpt' => 'required',
        ])){
            return redirect('/admin-panel/blog-post/create')->wihtInput()->with('error');
        };

        $post = new BlogPost;
        $post->title    = request('title');
        $post->slug     = request('slug');
        $post->excerpt  = request('excerpt');
        $post->body     = request('body');
        $post->image    = request('image');
        $post->save();
        return redirect('/admin-panel/blog-post/' . $post->slug . '/edit');
    }

    public function edit(Request $request, BlogPost $post){
        return view('blog.edit', ['post'=>$post]);
    }

    public function update(Request $request){
        $id = request('id');
        $post = BlogPost::all()->where('id', $id)->first();
        $post->title    = request('title');
        $post->slug     = request('slug');
        $post->excerpt  = request('excerpt');
        $post->body     = request('body');
        $post->image    = request('image');
        $post->save();
    }

    public function deleteAPI(BlogPost $post){
        $slug = request('slug');
        $post = BlogPost::all()->where('slug', $slug)->first();
        $post->delete();
        return response()->json(['success'=>'Succesfully deleted record']);
    }

    public function delete(BlogPost $post){
        $post->delete();
        return redirect('/admin-panel');
    }


}
