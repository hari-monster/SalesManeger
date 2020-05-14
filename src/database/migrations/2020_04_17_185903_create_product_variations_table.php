<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductVariationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('product_variations', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary();
            $table->unsignedBigInteger('product_id');
            $table->string('sku_id');
            $table->decimal('price', 12, 2)->default(0);
            $table->timestamp('released_at');
            $table->timestamp('expired_at');
            $table->timestamp('sale_start_at');
            $table->timestamp('sale_end_at');
            $table->unsignedSmallInteger('sale_lower_limit')->default(0);
            $table->unsignedSmallInteger('sale_upper_limit')->default(65535);
            $table->timestamp('registered_at')->default(DB::raw('CURRENT_DAYTIME'));
            $table->unsignedBigInteger('expected_shipping_id');
            $table->softDeletesTz();

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
        Schema::dropIfExists('product_variations');
    }
}
