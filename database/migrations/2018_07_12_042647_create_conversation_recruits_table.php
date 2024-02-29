<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateConversationRecruitsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conversation_recruits', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('useradmin')->unsigned();
            $table->integer('useremployee')->unsigned();
            $table->string('name');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('useradmin')->references('id')->on('users');
            $table->foreign('useremployee')->references('id')->on('employees');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('conversation_recruits');
    }
}
