<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    //

    public function index()
    {
        $date = Carbon::today()->subDays(7);
        $posts = Post::where('created_at', '>=', $date)->get();


        return view('home', compact('posts'));
    }

    public function show($id)
    {

        $post = Post::find($id);

        return view('posts.show', compact('post'));
    }

    public function create()
    {
        if (Auth::check())
            return view('posts.add');
        else
            return redirect('/');
    }

    public function store(Request $request)
    {



        $post = new Post;

        $post->title = $request->title;
        $post->content = $request->content;
        $post->user_id = Auth::user()->id;

        $post->save();

        return redirect('/');



    }


    public function edit($id)
    {

        $post = Post::find($id);
        if (Auth::check() && Auth::user()->id === $post->user_id) {

            return view('posts.edit', compact('post'));
        } else {
            return redirect('/');
        }


    }

    public function update($id, Request $request)
    {
        $post = Post::find($id);

        $post->title = $request->title;
        $post->content = $request->content;

        $post->save();

        return redirect('/');

    }


    public function delete($id)
    {

        $post = Post::find($id);

        if (Auth::check() && Auth::user()->id === $post->user_id && $post) {

            $post->delete();
        }

        return redirect('/');
    }

}