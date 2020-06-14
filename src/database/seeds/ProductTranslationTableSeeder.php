<?php

use Illuminate\Database\Seeder;

class ProductTranslationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Model\ProductTranslation::class,100)->create();
    }
}
