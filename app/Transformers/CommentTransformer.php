<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Comment;

class CommentTransformer extends TransformerAbstract
{
    /**
     * Transform Comment.
     *
     * @param Comment $Comment
     */
    public function transform(Comment $comment)
    {
        return [
            'content' => $comment->content,
            'user' => optional($comment->users)->name,
            'posting' => $comment->id_posting,
        ];
    }
}