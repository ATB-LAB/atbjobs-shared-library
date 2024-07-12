<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    protected $connection = 'mysql';
    public function up()
    {
        Schema::connection('mysql')->create('employers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable();
            $table->string('nickname')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->text('desc')->nullable();
            $table->string('specialization')->nullable();
            $table->string('contact')->nullable();
            $table->string('profile_status')->nullable();
            $table->string('profile_pic')->nullable();
            $table->string('cover_pic')->nullable();
            $table->string('headline')->nullable();
            $table->string('web')->nullable();
            $table->date('established')->nullable();
            $table->string('number_of_employee')->nullable();
            $table->text('intro')->nullable();
            $table->string('video')->nullable();
            $table->string('map_location')->nullable();
            $table->string('map_lat')->nullable();
            $table->string('map_long')->nullable();
            $table->string('custom_location')->nullable();
            $table->string('cand_is_search')->nullable();
            $table->string('sub_offices')->nullable();
            $table->string('medical_allowance')->nullable();
            $table->string('new_openings')->nullable();
            $table->string('total_offices')->nullable();
            $table->string('posted_job')->nullable();
            $table->integer('candidate_search_value')->nullable();
            $table->longText('viewed_resumes')->nullable();
            $table->string('wrc_ref_code')->nullable();
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
        Schema::dropIfExists('employers');
    }
}
