<?php

namespace App\Http\Controllers;

use App\Models\NewPost;
use App\Http\Requests\StoreNewPostRequest;
use App\Http\Requests\UpdateNewPostRequest;

class NewPostController extends Controller
{

    public function index()
    {   $posts=NewPost::all();
        return  view('createtopic',compact('posts'));
    }


    public function create()
    {

    }


    public function store(StoreNewPostRequest $request)
    {
            $post= new NewPost();
            $post->topic=$request->topic;
            $post->sub_topic=$request->sub_topic;
            $post->save();
            return redirect(route('newposts.index'));

        }



    public function show(NewPost $newPost)
    {   dd($newPost);
//        return view('chatshow',compact('newPost'));
    }


    public function edit(NewPost $newPost)
    {
        //
    }


    public function update(UpdateNewPostRequest $request, NewPost $newPost)
    {
        //
    }


    public function destroy(NewPost $newPost)
    {
        //
    }
}
