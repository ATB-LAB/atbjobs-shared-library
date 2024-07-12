<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddJobDeadlineToHighPaidJobs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('high_paid_jobs', function (Blueprint $table) {
            $table->date('job_deadline')->nullable()->after('job_post_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('high_paid_jobs', function (Blueprint $table) {
            //
        });
    }
}
