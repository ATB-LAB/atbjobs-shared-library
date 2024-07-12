<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    protected $connection = 'mysql';
    public function up()
    {

        Schema::connection('mysql')->create('candidates', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('nickname')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('profession')->nullable();
            $table->longText('intro')->nullable();
            $table->date('dob')->nullable();
            $table->string('martial_status')->nullable();
            $table->string('birth_city')->nullable();
            $table->string('profile_pic')->nullable();
            $table->string('cover_pic')->nullable();
            $table->string('phone_no')->nullable();
            $table->string('gender')->nullable();
            $table->string('qualification')->nullable();
            $table->string('profile_status')->nullable();
            $table->decimal('profile_percent')->nullable();
            $table->string('available_date')->nullable();
            $table->string('address')->nullable();
            $table->string('level')->nullable();
            $table->integer('candidate_applied_jobs')->nullable();
            $table->string('candidate_type')->nullable();
            $table->string('map_lat')->nullable();
            $table->string('map_long')->nullable();
            $table->string('viewed_resumes')->nullable();
            $table->string('searching_for_job_status')->nullable();
            $table->string('ref_code')->nullable();
            $table->string('salary_type')->nullable();
            $table->string('salary_currency')->nullable();
            $table->string('present_salary')->nullable();
            $table->string('expected_salary')->nullable();
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
        Schema::dropIfExists('candidates');
    }
}
