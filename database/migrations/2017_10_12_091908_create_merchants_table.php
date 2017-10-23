<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMerchantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('merchants', function (Blueprint $table) {
            $table->increments('id');
		$table->string('name');
		$table->integer('image');
		$table->text('description');
		$table->string('seo_title');
		$table->string('seo_description');
		$table->string('url');
		$table->boolean('status');
		$table->float('commission');
		$table->float('cashback');
		$table->integer('rate');
		$table->integer('added');

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
        Schema::dropIfExists('merchants');
    }
}
