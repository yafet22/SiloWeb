<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posting extends Model
{
    protected $table = 'postings';
    protected $primaryKey = 'id';
    public $timestamps = true;
 
    protected $fillable = [ 'title',
                            'photo',
                            'description',
                            'category'
                        ];
}
