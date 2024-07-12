<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidateReferencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidate_references', function (Blueprint $table) {
            $table->id();
            $table->foreignId('candidate_id');
            $table->string('name')->nullable();
            $table->string('designation')->nullable();
            $table->string('organization')->nullable();
            $table->string('relation')->nullable();
            $table->string('mobile_number')->nullable();
            $table->string('email')->nullable();
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
        Schema::dropIfExists('candidate_references');
    }
}
