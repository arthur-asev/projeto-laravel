<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdatePost;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest('id')->paginate(1);
        return view('admin.posts.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store(StoreUpdatePost $request)
    {
        Post::create($request->all());

        return redirect()
        ->route('posts.index')
        ->with('message', 'Post criado com sucesso');
    }

    public function show($id)
    {
        $post = Post::find($id);
        Post::where('id', $id)->first();
        if (!$post) {
            return redirect()->route('posts.index');
        }

        return view('admin.posts.show', compact('post'));
    }

    public function destroy($id)
    {
        if (!$post = Post::find($id))
            return redirect()->route('posts.index');

        $post->delete();

        return redirect()
            ->route(('posts.index'))
            ->with('message', 'Post Deletado com sucesso');
    }

    public function edit($id)
    {
        if (!$post = Post::find($id))  {
            return redirect()->back();
        }

        return view('admin.posts.edit', compact('post'));
    }

    public function update(StoreUpdatePost $request, $id)
    {
        if (!$post = Post::find($id)) {
            return redirect()->back();
        }
        $data = $request->all();
        $post->update($data);

        return redirect()
                ->route('posts.index')
                ->with('message', 'Post atualizado com sucesso');
    }
}
