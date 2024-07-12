<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidateEducationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    protected $connection = 'mysql';
    public function up()
    {
        Schema::connection('mysql')->create('candidate_educations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('candidate_id')->nullable();
            $table->string('degree_name')->nullable();
            $table->string('degree_institute')->nullable();
            $table->string('degree_start')->nullable();
            $table->string('degree_end')->nullable();
            $table->string('degree_percent')->nullable();
            $table->string('degree_grade')->nullable();
            $table->text('degree_detail')->nullable();
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
        Schema::dropIfExists('candidate_educations');
    }
}
