<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $table = 'Accounts';

    protected $fillable = ['username'];
}
