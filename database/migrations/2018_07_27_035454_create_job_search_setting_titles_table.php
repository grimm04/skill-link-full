<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJobSearchSettingTitlesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_search_setting_titles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('jobsearchid')->unsigned();
            $table->integer('chtradeid')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('jobsearchid')->references('id')->on('job_search_settings');
            $table->foreign('chtradeid')->references('id')->on('child_trades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('job_search_setting_titles');
    }
}
