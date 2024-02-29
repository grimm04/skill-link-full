<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateConversationAdminsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conversation_admins', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('userone')->unsigned();
            $table->integer('usertwo')->unsigned();
            $table->string('name');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('userone')->references('id')->on('users');
            $table->foreign('usertwo')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('conversation_admins');
    }
}
