<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidateRecommendedJobInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidate_recommended_job_infos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('candidate_id');
            $table->string('designation')->nullable();
            $table->integer('expected_salary')->nullable();
            $table->integer('currency_id')->nullable();
            $table->foreignId('candidate_type_id')->nullable();
            $table->foreignId('district_id')->nullable();
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
        Schema::dropIfExists('candidate_recommended_job_infos');
    }
}
