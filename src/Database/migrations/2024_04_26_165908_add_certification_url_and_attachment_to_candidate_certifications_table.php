<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCertificationUrlAndAttachmentToCandidateCertificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('candidate_certifications', function (Blueprint $table) {
            $table->string('certificate_url')->nullable()->after('institute');
            $table->string('attachment')->nullable()->after('description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('candidate_certifications', function (Blueprint $table) {
            //
        });
    }
}
