<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\ProductVariation;
use App\Model\ProductVariationStock;
use Faker\Generator as Faker;

$factory->define(
    ProductVariationStock::class,
    function (Faker $faker) {
        return [
            'product_variation_id' => function () {
                return factory(ProductVariation::class)->create()->id;
            },
            'quantity' => $faker->numberBetween(0, 1000),
        ];
    }
);
