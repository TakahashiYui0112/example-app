<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('index', compact('posts'));
    }

    public function create()
    {


        return view('create');
    }
    public function store(Request $request)
    {
        $post = new Post;
        $post->title =  $request->title;
        $post->content =  $request->content;
        $post->prefectures =  $request->prefectures;


        $post->save();
        return redirect('/posts/' . $post->id);
    }
    public function show($id)
    {
        $post = Post::find($id);

        return view('show', compact('post', 'id'));
    }
    public function edit($id)
    {
        $post = Post::find($id);

        return view('edit', compact('post', 'id'));
    }

    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post->title =  $request->title;
        $post->content =  $request->content;
        $post->prefectures =  $request->prefectures;


        $post->save();
        return redirect('/posts/' . $post->id);
    }
}
