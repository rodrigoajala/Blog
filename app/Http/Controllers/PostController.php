<?php

namespace App\Http\Controllers;

use App\Services\PostService;
use Illuminate\Http\Request;

 class PostController extends Controller
{
    public function __construct(PostService $postService)
    {
        $this->postService = $postService;

    }
    public function index()
    {
        $posts = $this->postService->getPosts();
        return view('posts.index',['posts' => $posts]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'theme' => 'required',
        ]);

        $this->postService->createPost($data);
        return redirect()->route('posts.index');

    }

    public function show($id)
    {
        $post = $this->postService->getById($id);
        return view('posts.show',['post' => $post]);
    }

    public function edit(string $id)
    {
        $post = $this->postService->getById($id);
        return view('posts.edit',['post' => $post]);

    }

    public function update(Request $request, string $id)
    {

        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'theme' => 'required',
        ]);
        $this->postService->updatePost($id, $data);

        return redirect()->route('posts.index');
    }

    public function destroy(string $id)
    {
        $this->postService->deletePost($id);
        return redirect()->route('posts.index');
    }

    public function search(Request $request)
    {
        dd($request->get('search'));
    }
}
