<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMonthlyPopularJobs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monthly_popular_jobs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('job_post_id');
            $table->string('job_title')->nullable();
            $table->string('employer_image')->nullable();
            $table->string('employer_name')->nullable();
            $table->integer('minimum_salary')->nullable();
            $table->integer('maximum_salary')->nullable();
            $table->string('salary_currency_name')->nullable();
            $table->foreignId('employer_id');
            $table->string('salary_type')->nullable();
            $table->dateTime('job_post_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('monthly_popular_jobs');
    }
}
