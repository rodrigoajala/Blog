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
        //
    }
    public function createPost($data)
    {
        //
    }

    public function updatePost($id, $data)
    {
        //
    }

    public function deletePost($id)
    {
        //
    }

}
