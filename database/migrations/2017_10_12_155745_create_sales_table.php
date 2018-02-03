<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('status')->default(0);
            $table->float('value')->default(0);
            $table->integer('merchant_id')->default(0);
            $table->integer('user_id')->default(0);;
            $table->integer('club_id')->default(0);;
            $table->float('service_fee')->default(0);
            $table->float('commission')->default(0);
            $table->string('updated_at');
            $table->string('created_at');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales');
    }
}
