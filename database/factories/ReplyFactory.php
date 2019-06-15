<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Question;
use App\Models\Reply;
use App\Models\User;
use Faker\Generator as Faker;

$factory->define(Reply::class, function (Faker $faker) {
    return array(
        'body' => $faker->text,
        'question_id' => function () {
            return Question::all()->random();
        },
        'user_id' => function () {
            return User::all()->random();
        },
    );
});
