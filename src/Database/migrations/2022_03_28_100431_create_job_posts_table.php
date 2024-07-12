<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    protected $connection = 'mysql';
    public function up()
    {
        Schema::connection('mysql')->create('job_posts', function (Blueprint $table) {
            $table->id('post_id');
//          $table->bigInteger('post_id')->nullable();
            $table->string('author_id')->nullable();
            $table->dateTime('post_date')->nullable();
            $table->longText('job_description')->nullable();
            $table->string('job_title')->nullable();
            $table->string('job_status')->nullable();
            $table->string('comment_status')->nullable();
            $table->string('ping_status')->nullable();
            $table->dateTime('post_modified')->nullable();
            $table->string('guid')->nullable();
            $table->bigInteger('comment_count')->nullable();
            $table->date('job_deadline')->nullable();
            $table->integer('number_of_vacancy')->nullable();
            $table->string('job_address')->nullable();
            $table->float('job_lat')->nullable();
            $table->float('job_long')->nullable();
            $table->integer('job_type')->nullable();
            $table->integer('job_level')->nullable();
            $table->integer('job_shift')->nullable();
            $table->integer('job_experience')->nullable();
            $table->longText('job_skill')->nullable();
            $table->string('qualification')->nullable();
            $table->string('salary_currency')->nullable();
            $table->string('salary_range')->nullable();
            $table->string('salary_type')->nullable();
            $table->string('custom_question')->nullable();
            $table->string('qualification_prefer')->nullable();
            $table->longText('job_requirement')->nullable();
            $table->longText('job_benefit')->nullable();
//            $table->string('remotely_work')->nullable();
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
        Schema::dropIfExists('job_posts');
    }
}
