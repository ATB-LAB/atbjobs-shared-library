<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobApplyInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    protected $connection = 'mysql';
    public function up()
    {
        Schema::connection('mysql')->create('job_apply_infos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('candidate_id')->nullable();
            $table->foreignId('job_post_id')->nullable();
            $table->foreignId('candidate_resume_id')->nullable();
            $table->foreignId('cover_letter_id')->nullable();
            $table->longText('cover_letter_unsaved')->nullable();
            $table->string('apply_with')->nullable();
            $table->date('apply_date')->nullable();
            $table->integer('apply_status')->nullable();
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
        Schema::dropIfExists('job_apply_infos');
    }
}
