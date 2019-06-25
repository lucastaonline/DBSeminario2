<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostSql extends Model
{
    protected $table = 'Posts';

    protected $fillable = ['created_by','created_on','content'];

    public $timestamps = false;
}
