<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use App\Account;
use Faker\Generator as Faker;

$factory->define(App\PostSql::class, function (Faker $faker) {
    return [
        'created_by' => Account::inRandomOrder()->first()->id,
        'created_on' => now(),
        'content' => Str::random(10)
    ];
});
