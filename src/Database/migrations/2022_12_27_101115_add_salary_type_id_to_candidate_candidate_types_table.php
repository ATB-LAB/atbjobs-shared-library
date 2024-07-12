<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSalaryTypeIdToCandidateCandidateTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('candidate_candidate_types', function (Blueprint $table) {
            $table->foreignId('salary_type_id')->nullable()->after('present_salary');
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
            $table->dropColumn('salary_type_id');
        });
    }
}
