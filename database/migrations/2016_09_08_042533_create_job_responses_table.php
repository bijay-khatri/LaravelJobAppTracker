<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobResponsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_responses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('job_application_id')->unsigned();
            $table->string('name',50);
            $table->text('description');
            $table->date('response_on');
            // $table->string('from',50);
            // $table->string('email',50);
            // $table->string('contact',20);
            $table->timestamps();

            $table->foreign('job_application_id')->references('id')->on('job_applications');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_responses');
    }
}
