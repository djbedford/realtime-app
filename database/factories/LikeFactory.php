<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Like;
use App\Models\User;
use Faker\Generator as Faker;

$factory->define(Like::class, function (Faker $faker) {
    return [
        'user_id' => function () {
            return User::all()->random();
        }
    ];
});
