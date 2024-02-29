<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMessageAdminsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('message_admins', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('userfrom')->unsigned();
            $table->integer('userto')->unsigned();
            $table->integer('conversationid')->unsigned();
            $table->text('msg');
            $table->string('images');
            $table->integer('status');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('userfrom')->references('id')->on('users');
            $table->foreign('userto')->references('id')->on('users');
            $table->foreign('conversationid')->references('id')->on('conversation_admins');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('message_admins');
    }
}
