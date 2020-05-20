<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Product;
use Faker\Generator as Faker;

$factory->define(
    Product::class,
    function (Faker $faker) {
        return [
            'code' => $faker->randomDigit,
            'memo' => $faker->paragraph,
        ];
    }
);
