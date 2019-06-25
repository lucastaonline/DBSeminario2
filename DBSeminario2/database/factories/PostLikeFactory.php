<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;
use App\Account;
use App\PostSql;
use App\PostLike;

$factory->define(Model::class, function (Faker $faker) {
    $conseguiuAchar = false;
    $limitador = 0;
    while(!$conseguiuAchar && limitador < 100000) {
        $accountId = Account::inRandomOrder()->first()->id;
        $postId = PostSql::inRandomOrder()->first()->id;
        if(PostLike::where('account_id', $accountID)->where('post_id', $postId)->count() > 0)
            $conseguiuAchar = true;
        $limitador += 1;
    }
    return [
        'account_id' => $accountId,
        'post_id' => $postId,
    ];
});