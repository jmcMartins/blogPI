<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Post;

class PostController extends Controller
{
  public function index()
  {
    $posts = Post::all();
    return view('posts.index',compact('posts'));
  }

  public function show($id)
  {
  	$post = Post::find($id);
    return view('posts.show',compact('post'));
  }

  public function create()
  {
    return view('posts.create');
  }

  public function store(Request $request)
  {
    Post::create($request->all());

    return redirect('posts');
  }

  public function edit($id)
  {
    $post = Post::find($id);
    return view('posts.edit',compact('post'));
  }

  public function update(Request $request, $id)
  {
    Post::find($id)->update($request->all());
    return redirect('posts');
  }

  public function destroy(Request $request, $id)
  {
    Post::destroy($id);
    return redirect('posts');
  }

}
