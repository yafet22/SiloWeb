<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'users';
    protected $primaryKey = 'id_user';
    public $timestamps = true;
    protected $fillable = [
        'name', 'password', 'phone_number', 'code', 'status',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */

    public function store($request)
    {
        $this->fill($request->all());
        $sms = $this->save();
        return response()->json($sms, 200);
    }
    public function updateModel($request)
    {
        $this->update($request->all());
        return $this;
    }
 
}
