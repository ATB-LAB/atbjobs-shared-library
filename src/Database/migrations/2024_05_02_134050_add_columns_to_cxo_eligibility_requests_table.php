<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToCxoEligibilityRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cxo_eligibility_requests', function (Blueprint $table) {
            $table->integer('candidate_resume_id')->nullable()->after('job_id');
            $table->integer('cover_letter_id')->nullable()->after('job_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cxo_eligibility_requests', function (Blueprint $table) {
            //
        });
    }
}
