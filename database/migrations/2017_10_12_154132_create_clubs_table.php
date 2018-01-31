<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClubsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clubs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('image')->nullable();
            $table->tinyInteger('logo')->default(0);
            $table->string('country')->default('Germany');
            $table->string('address')->nullable();
            $table->string('zip')->nullable();
            $table->string('contacts')->nullable();
            $table->string('bank_details')->nullable();
            $table->integer('fans')->default(0);
            $table->float('total_commission')->default(0);
            $table->float('total_paid')->default(0);
            $table->integer('rate')->default(0);
            $table->float('fee')->default(0);
            $table->string('url')->nullable();
            $table->string('dir')->nullable();
            $table->float('lat')->default(0);
            $table->float('lng')->default(0);
            $table->tinyInteger('status')->default(0);
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('youtube')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('category')->default('sport');
            $table->string('description')->nullable();
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
        Schema::dropIfExists('clubs');
    }
}
