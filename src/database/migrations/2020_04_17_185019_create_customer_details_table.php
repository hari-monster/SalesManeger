<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_details', function (Blueprint $table) {
            $table->unsignedBigInteger('customers_id')->comment('会員ID');
            $table->string('name_kana')->nullable()->comment('会員名カナ');
            $table->date('birthday')->comment('誕生日');
            $table->string('phone', '20');
            $table->unsignedTinyInteger('gender')->nullable()->comment('性別');
            $table->string('login_ip', '40')->comment('ログイン時IP');
            $table->bigIncrements('last_login_at');
            $table->timestamps();
            $table->foreign('customers_id')->references('id')->on('customers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_details');
    }
}
