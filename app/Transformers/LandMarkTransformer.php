<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\LandMark;

class LandMarkTransformer extends TransformerAbstract
{
    /**
     * Transform LandMark.
     *
     * @param LandMark $LandMark
     */
    public function transform(LandMark $landMark)
    {
        return [
            'id' => $landMark->id_landmark,
            'title' => $landMark->name,
            'photo' => $landMark->photo,
            'description' => $landMark->description,
            'category' => $landMark->category,
            'rating' => $landMark->rating
        ];
    }
}