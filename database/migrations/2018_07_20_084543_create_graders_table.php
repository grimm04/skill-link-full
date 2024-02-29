<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGradersTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('graders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('employeeid')->unsigned();
            $table->integer('userid')->unsigned();
            $table->string('grade');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('employeeid')->references('id')->on('employees');
            $table->foreign('userid')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('graders');
    }
}
