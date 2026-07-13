<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class PostController extends Controller
{
    //投稿一覧ページ表示
    public function index(){
        $posts = Post::latest('id')->get();
        return view('posts.index',compact('posts'));
    }

    public function create(){
        return view('posts.create');
    }

    public function store(Request $request){
        $validated = $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $posts = Post::create([
            'title' => $validated['title'],
            'content' => $validated['content'],
            'published_at' => now(),
            ]);

        return redirect()->route('posts.index');
    }

    public function edit($id){
        $post = Post::find($id);
        return view('posts.edit',compact('post'));
    }

    public function update($id,Request $request){
        $validated = $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $post = Post::find($id);
        $post->update([
            'title' => $validated['title'],
            'content' => $validated['content'],
        ]);

        return redirect()->route('posts.index');
    }

    public function destroy($id){
        $post=Post::destroy($id);
        return redirect()->route('posts.index');
    }
}
