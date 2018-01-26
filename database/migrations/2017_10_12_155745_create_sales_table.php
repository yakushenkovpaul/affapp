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
            $table->boolean('status');
            $table->float('value');
            $table->float('comission');
            $table->integer('merchant_id');
            $table->integer('user_id');
            $table->integer('club_id');
            $table->float('service_fee');
            $table->float('commission');
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
