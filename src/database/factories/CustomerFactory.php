<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Customer;
use Faker\Generator as Faker;

$factory->define(
    Customer::class,
    function (Faker $faker) {
        return [
            'uuid' => $faker->randomDigit,
            'name' => $faker->name,
            'email' => $faker->safeEmail,
        ];
    });
