<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;
use App\Account;

$factory->define(App\PostMongo::class, function (Faker $faker) {
    $liked_by = [];
    $accountsRandom = Account::inRandomOrder();
    $i = 0;
    while($i < 5 && $i < $accountsRandom->count()) {
        $liked_by->push($accountsRandom->valus()->get($i));
        $i++;
    }
    return [
        'created_by' => $accountsRandom->first()->id,
        'created_on' => now(),
        'content' => Str::random(10),
        'liked_by' => $liked_by
    ];
});
