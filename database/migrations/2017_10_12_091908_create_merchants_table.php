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
            $table->tinyInteger('main')->default(0);
            $table->integer('program_id')->default(0);
            $table->string('name');
            $table->string('image');
            $table->text('description')->nullable();
            $table->string('seo_title')->nullable();
            $table->string('seo_description')->nullable();
            $table->string('url')->nullable();
            $table->string('url_affilate')->nullable();
            $table->boolean('status')->default(1);
            $table->tinyInteger('timeleads')->default(0);
            $table->tinyInteger('timesales')->default(0);
            $table->tinyInteger('sale_percent_max')->default(0);
            $table->tinyInteger('sale_percent_min')->default(0);
            $table->float('sale_fix_max')->default(0);
            $table->float('sale_fix_min')->default(0);
            $table->float('lead_max')->default(0);
            $table->float('lead_min')->default(0);
            $table->integer('rate')->default(0);
            $table->text('info');
            $table->tinyInteger('logo')->default(0);
            $table->string('dir');
            $table->string('cashback_info')->nullable();
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
