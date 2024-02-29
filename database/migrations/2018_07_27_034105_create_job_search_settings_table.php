<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJobSearchSettingsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_search_settings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('userid')->unsigned();
            $table->integer('postedtimeid')->unsigned();
            $table->integer('typejobid')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('userid')->references('id')->on('employees');
            $table->foreign('postedtimeid')->references('id')->on('posted_times');
            $table->foreign('typejobid')->references('id')->on('type_jobs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('job_search_settings');
    }
}
