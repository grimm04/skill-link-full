<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHiresTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hires', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('employeeid')->unsigned();
            $table->integer('companyid')->unsigned();
            $table->integer('childtradeid')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('employeeid')->references('id')->on('employees');
            $table->foreign('companyid')->references('id')->on('companies');
            $table->foreign('childtradeid')->references('id')->on('child_trades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('hires');
    }
}
