<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSalaryCurrencyToCandidateCandidateTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('candidate_candidate_types', function (Blueprint $table) {
            $table->unsignedInteger('salary_currency')->nullable()->after('salary_type_id');
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
            //
        });
    }
}
