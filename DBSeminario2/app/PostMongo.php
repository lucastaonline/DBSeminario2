<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostMongo extends Model
{
    protected $table = 'Posts';

    protected $fillable = ['created_by','created_on','content','liked_by'];
}
