<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Carbon\Carbon;
use App\Model\Product;
use Faker\Generator as Faker;
use App\Model\ProductVariation;

$factory->define(
    ProductVariation::class,
    function (Faker $faker) {

        return [
            'product_id' => function () {
                return factory(Product::class)->create()->id;
            },
            'sku_code' => $faker->randomDigit,
            'price' => $faker->numberBetween(100, 100000),
            'released_at' => Carbon::yesterday(),
            'expired_at' => Carbon::tomorrow(),
            'sale_start_at' => Carbon::yesterday(),
            'sale_end_at' => Carbon::tomorrow(),
            'sale_lower_limit' => 1,
            'sale_upper_limit' => rand(2, 99),
            'registered_at' => Carbon::today(),
            'expected_shipping_id' => $faker->randomDigit,
        ];
    }
);
