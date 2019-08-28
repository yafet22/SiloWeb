<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LandMark extends Model
{
    protected $table = 'land_marks';
    protected $primaryKey = 'id_landmark';
    public $timestamps = true;
 
    protected $fillable = [ 'name',
                            'photo',
                            'description',
                            'category',
                            'rating'
                        ];
}
