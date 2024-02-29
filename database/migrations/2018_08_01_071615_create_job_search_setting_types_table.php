<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJobSearchSettingTypesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_search_setting_types', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('jobsearchid')->unsigned();
            $table->integer('typejob')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('jobsearchid')->references('id')->on('job_search_settings');
            $table->foreign('typejob')->references('id')->on('type_jobs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('job_search_setting_types');
    }
}
