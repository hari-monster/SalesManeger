<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Product;
use App\Model\ProductTranslation;
use Faker\Generator as Faker;

$factory->define(ProductTranslation::class, function (Faker $faker) {
    return [
        'product_id' => function () {
            return factory(Product::class)->create()->id;
        },
        'name' => $faker->text(10),
        'local' => 'ja',
        'description' => $faker->paragraph,
    ];
}
);
