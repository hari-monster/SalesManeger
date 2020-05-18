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
            $table->unsignedBigInteger('id')->primary()->comment('ID');
            $table->unsignedBigInteger('product_id')->comment('商品情報ID');
            $table->string('sku_id')->comment('コード');
            $table->decimal('price', 12, 2)->default(0)->comment('価格');
            $table->timestamp('released_at')->comment('公開開始日時');
            $table->timestamp('expired_at')->comment('公開終了日時');
            $table->timestamp('sale_start_at')->comment('販売開始日時');
            $table->timestamp('sale_end_at')->comment('販売終了日時');
            $table->unsignedSmallInteger('sale_lower_limit')->default(0)->comment('最小注文数');
            $table->unsignedSmallInteger('sale_upper_limit')->default(65535)->comment('最大注文可能数');
            $table->timestamp('registered_at')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('商品登録日時');
            $table->unsignedBigInteger('expected_shipping_id')->comment('配送予定日ID');
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
