<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Image;
use Faker\Generator as Faker;
use App\Model\ProductVariation;
use App\Model\ProductVariationImage;

$factory->define(
    ProductVariationImage::class,
    function (Faker $faker) {

        return [
            'product_variation_id' => function () {
                return factory(ProductVariation::class)->create()->id;
            },
            'image_id' => function () {
                return factory(Image::class)->create()->id;
            },
        ];
    }
);
