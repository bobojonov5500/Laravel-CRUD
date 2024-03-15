<?php

namespace App\Http\Controllers;

use App\Models\post;
use App\Http\Requests\StorepostRequest;
use App\Http\Requests\UpdatepostRequest;

class PostController extends Controller
{

    public function index()
    {
        $posts=Post::all();
        return view('index',compact('posts'));
    }


    public function create()
    {
        return view('create');
    }


    public function store(StorepostRequest $request)
    {
        $post = new Post();
        $post->car_name=$request->car_name;
        $post->model=$request->model;
        $post->price=$request->price;
        $post->company_name=$request->company_name;
        $post->save();
        return redirect(route('posts.create'));

    }


    public function show(post $post)
    {
        return view('show',compact('post'));
    }


    public function edit(post $post)
    {
        return view('edit',compact('post'));
    }


    public function update(UpdatepostRequest $request ,post $post)
    {
        $post->update($request->all());
        return redirect(route('posts.index',compact('post')));
    }


    public function destroy(post $post )
    {
        $post->delete($post->all());
        return redirect(route('posts.index',compact('post')));
    }



}
