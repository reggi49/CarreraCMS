<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CommentStoreRequest;
use App\Comment;
use App\Post;

class CommentsController extends Controller
{
    public function store(Post $post, CommentStoreRequest $request)
    {
        $data = $request->all();
        $data['updated_at'] = null;

        // Comment::create($data);
        $post->createComment($data);

        return redirect()->back()->with('message', "Your comment successfuly send.");
    }
}
