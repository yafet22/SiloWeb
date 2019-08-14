<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    protected $primaryKey = 'id_comment';
    public $timestamps = true;
    protected $fillable = [
        'content', 'id_user', 'id_posting',
    ];

    public function postings(){
        return $this->belongsTo('App\Posting','id_posting');
    }

    public function users(){
        return $this->belongsTo('App\User','id_user');
    }
}
