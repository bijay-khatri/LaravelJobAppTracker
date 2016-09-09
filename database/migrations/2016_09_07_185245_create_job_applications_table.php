<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_applications', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('position');
            $table->date('applied_on');
            $table->string('company');
            $table->string('location');
            $table->string('jobsite');
            $table->string('joblink');
            $table->enum('status',['Applied','Screened','Interviewd','Waiting','Rejected','Dropped','Approved']);
            $table->boolean('withresume');
            $table->boolean('withlinkedin');
            $table->boolean('withcoverletter');
            $table->enum('type', ['fulltime', 'parttime','contract','contracttohire']);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_applications');
    }
}
