<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Posting;

class PostingTransformer extends TransformerAbstract
{
    /**
     * Transform Posting.
     *
     * @param Posting $Posting
     */
    public function transform(Posting $posting)
    {
        return [
            'id' => $posting->id,
            'title' => $posting->title,
            'photo' => $posting->photo,
            'description' => $posting->description,
            'category' => $posting->category,
        ];
    }
}