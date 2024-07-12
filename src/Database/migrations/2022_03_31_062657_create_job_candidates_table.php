<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    protected $connection = 'mysql';
    public function up()
    {
        Schema::connection('mysql')->create('job_candidates', function (Blueprint $table) {
            $table->id();
            $table->foreignId('job_post_id');
            $table->foreignId('candidate_id');
            $table->foreignId('candidate_cover_letter_id');
            $table->foreignId('candidate_resume_id');
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
        Schema::dropIfExists('job_candidates');
    }
}
