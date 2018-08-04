<?php

namespace App\Http\Controllers;

use App\{Post, Comment};

use Illuminate\Http\Request;
class PostController extends Controller
{
    public function index(){
        $posts = Post::orderBy('created_at','DESC')->paginate();
        //dd($posts->pluck('created_at')->toArray());
        return view('post.index', compact('posts'));
    }
    public function show(Post $post, $slug)
    {   
        if($post->slug != $slug){ return redirect($post->url, 301);}
        $comments = Comment::where('post_id',$post->id)->orderBy('created_at','DESC')->paginate();
        //dd($comments);
        return view('post.show', compact('post', 'comments'));
    }
}
