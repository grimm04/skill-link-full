<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJobSearchSettingLocationsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_search_setting_locations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('jobsearchid')->unsigned();
            $table->integer('locationid')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('jobsearchid')->references('id')->on('job_search_settings');
            $table->foreign('locationid')->references('id')->on('job_search_settings');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('job_search_setting_locations');
    }
}
