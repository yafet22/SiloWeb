<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\User;

class UserTransformer extends TransformerAbstract
{
    /**
     * Transform User.
     *
     * @param User $user
     */
    public function transform(User $user)
    {
        return [
            'id_user' => $user->id_user,
            'phone_number' => $user->phone_number,
            'name' => $user->name,
            'status' => $user->status,
        ];
    }
}