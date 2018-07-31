<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class PostController extends Controller
{
    public function __construct()
    {
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('post.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        if(auth()->user()){
            $post = new Post($request->all());
            auth()->user()->posts()->save($post);
            return $post->title;
        }else{
            return route('login');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\f  $f
     * @return \Illuminate\Http\Response
     */
    public function show(f $f)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\f  $f
     * @return \Illuminate\Http\Response
     */
    public function edit(f $f)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\f  $f
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, f $f)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\f  $f
     * @return \Illuminate\Http\Response
     */
    public function destroy(f $f)
    {
        //
    }
}
