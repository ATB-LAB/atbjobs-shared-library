<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToCandidateExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('candidate_experiences', function (Blueprint $table) {
            $table->integer('candidate_type_id')->nullable()->after('organization_desc');
            $table->integer('industry_id')->nullable()->after('candidate_type_id');
            $table->integer('department_id')->nullable()->after('industry_id');
            $table->string('company_location')->nullable()->after('department_id');
            $table->enum('candidate_work_type',['','On-Site', 'Hybrid', 'Remote'])->nullable()->after('company_location');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('candidate_experiences', function (Blueprint $table) {
            //
        });
    }
}
