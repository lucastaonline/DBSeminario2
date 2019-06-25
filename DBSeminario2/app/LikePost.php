<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LikePost extends Model
{
    protected $table = 'LikesPosts';

    protected $fillable = ['account_id','post_id'];
}
