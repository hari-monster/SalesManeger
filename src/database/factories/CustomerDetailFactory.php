<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Customer;
use App\Model\CustomerDetail;
use Faker\Generator as Faker;
use Illuminate\Support\Carbon;

$factory->define(CustomerDetail::class, function (Faker $faker) {
    return [
        'customers_id' => function () {
            return factory(Customer::class)->create()->uuid;
        },
        'name_kana' => $faker->name,
        'birthday' => Carbon::today()->subCenturies(),
        'phone' => $faker->phoneNumber,
        'gender' => 0,
        'login_ip' => $faker->ipv4,
        'last_login_at' => Carbon::today(),
    ];
});
