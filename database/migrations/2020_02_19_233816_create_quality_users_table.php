<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQualityUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quality_users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('quality_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('level');
            $table->boolean('validated');
            $table->timestamps();
            $table->foreign('quality_id')->references('id')->on('qualities');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quality_users');
    }
}
