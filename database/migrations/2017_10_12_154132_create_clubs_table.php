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
            $table->string('name');
            $table->string('image');
            $table->tinyInteger('logo')->default(0);
            $table->string('country');
            $table->string('address');
            $table->string('zip');
            $table->string('contacts')->nullable();
            $table->string('bank_details')->nullable();
            $table->integer('fans');
            $table->float('total_commission');
            $table->float('total_paid');
            $table->integer('rate');
            $table->float('fee');
            $table->string('url');
            $table->string('dir');
            $table->float('lat');
            $table->float('lng');
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
