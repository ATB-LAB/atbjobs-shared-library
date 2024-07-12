<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidateViewLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidate_view_logs', function (Blueprint $table) {
            $table->id();
            $table->integer('employer_id')->nullable();
            $table->integer('candidate_id')->nullable();
            $table->integer('candidate_resume_id')->nullable();
            $table->tinyInteger('profile_view')->nullable()->default(false);
            $table->tinyInteger('resume_download')->nullable()->default(false);
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
        Schema::dropIfExists('candidate_view_logs');
    }
}
