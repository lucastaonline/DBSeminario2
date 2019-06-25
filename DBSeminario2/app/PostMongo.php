<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class PostMongo extends Eloquent
{
    protected $table = 'Posts';

    protected $fillable = ['created_by','created_on','content','liked_by'];

    public $timestamps = false;
}
