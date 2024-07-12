<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPresentSalaryToCandidateCandidateTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('candidate_candidate_types', function (Blueprint $table) {
            $table->integer('present_salary')->nullable()->after('expected_salary');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('candidate_candidate_types', function (Blueprint $table) {
            $table->integer('present_salary'); 
        });
    }
}
