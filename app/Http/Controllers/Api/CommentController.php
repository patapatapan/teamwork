<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CommentRequest;
use App\Models\Comment;

class CommentController extends Controller
{
    //
    public function store(CommentRequest $request)
    {
        //comment新增訊息
        //
        Comment::create($request->only(['name', 'email', 'phone', 'comment', 'article_id']));

        return redirect()->back();
    }
}
