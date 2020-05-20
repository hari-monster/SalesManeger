<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_translations', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned()->comment('ID');
            $table->unsignedBigInteger('product_id')->unique()->comment('商品ID');
            $table->string('local')->unique()->comment('言語コード'); //言語コードとは？
            $table->string('name')->comment('商品名');
            $table->text('description')->comment('商品説明');

            $table->foreign('product_id')->references('id')->on('products');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_translations');
    }
}
