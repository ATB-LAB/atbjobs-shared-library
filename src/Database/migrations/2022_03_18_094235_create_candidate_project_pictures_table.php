<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidateProjectPicturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    protected $connection = 'mysql';
    public function up()
    {
        Schema::connection('mysql')->create('candidate_project_pictures', function (Blueprint $table) {
            $table->id();
            $table->foreignId('candidate_id')->nullable();
            $table->string('project_picture_link')->nullable();
            $table->string('project_picture_mime_type')->nullable();
            $table->string('project_picture_type')->nullable();
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
        Schema::dropIfExists('candidate_project_pictures');
    }
}
