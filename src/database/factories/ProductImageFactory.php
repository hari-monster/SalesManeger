<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Image;
use App\Model\ProductImage;
use App\Model\Product;
use Faker\Generator as Faker;

$factory->define(
    ProductImage::class,
    function (Faker $faker) {
        return [
            'product_id' => function () {
                return factory(Product::class)->create()->id;
            },
            'image_id' => function () {
                return factory(Image::class)->create()->id;
            }
        ];
    }
);
