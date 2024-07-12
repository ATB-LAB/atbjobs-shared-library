<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivityLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activity_logs', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->integer('user_role_id')->nullable();
            $table->integer('job_post_id')->nullable();
            $table->string('user_name')->nullable();
            $table->string('page_title')->nullable();
            $table->string('page_url')->nullable();
            $table->enum('action_type',['','view', 'create', 'update','delete'])->nullable();
            $table->string('ip')->nullable();
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
        Schema::dropIfExists('activity_logs');
    }
}
