<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryMerchant extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_merchant', function (Blueprint $table) {
            $table->integer('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->integer('merchant_id')->references('id')->on('merchants')->onDelete('cascade');
            $table->tinyInteger('main');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_merchant');
    }
}
