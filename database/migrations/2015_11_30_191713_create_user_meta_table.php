<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserMetaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_meta', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->boolean('is_active')->default(0);
            $table->string('activation_token')->nullable();
            $table->string('lastname')->nullable();
            $table->string('city')->nullable();
            $table->string('birthday')->nullable();
            $table->string('gender')->default(1);
            $table->integer('club_id')->default(0);
            $table->integer('rate')->default(0);
            $table->tinyInteger('mail')->default(1);
            $table->tinyInteger('avatar')->default(1);
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
        Schema::drop('user_meta');
    }
}
