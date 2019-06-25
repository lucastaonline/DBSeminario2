<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;
use App\Account;

$factory->define(App\PostMongo::class, function (Faker $faker) {
    $liked_by = [];
    $accounts = Account::all();
    $i = 0;
    while($i < 5 && $i < $accounts->count()) {
        array_push($liked_by,$accounts->values()->get($i));
        $i++;
    }
    return [
        'created_by' => $accounts->first()->id,
        'created_on' => now(),
        'content' => Str::random(10),
        'liked_by' => $liked_by
    ];
});
