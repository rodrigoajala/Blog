<?php

namespace App\Services;

use App\Models\Post;

class PostService
{
    public function getPosts()
    {
        return Post::all();
    }
    public function getById($id)
    {
       return Post::query()->findOrFail($id);
    }
    public function createPost($data)
    {
        Post::query()->create($data);
    }

    public function updatePost($id, $data)
    {
        $post = Post::query()->findOrFail($id);
        $post->update($data);
        return $post;
    }

    public function deletePost($id)
    {
        $post = Post::query()->findOrFail($id);
        $post->delete();
        return $post;
    }

    public function searchPost($search)
    {
        return Post::where('title', 'like', "%{$search}%")
            ->orWhere('theme', 'like', "%{$search}%")
            ->get();
    }

}
