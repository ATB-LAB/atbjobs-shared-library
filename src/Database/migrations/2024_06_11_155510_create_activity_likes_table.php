<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivityLikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activity_likes', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->integer('user_role_id')->nullable();
            $table->integer('job_post_id')->nullable();
            $table->string('user_name')->nullable();
            $table->string('page_title')->nullable();
            $table->string('page_url')->nullable();
            $table->integer('like_count')->nullable()->default(1);
            $table->string('ip')->nullable();
            $table->enum('platform', ['', 'web', 'app'])->nullable();
            $table->string('user_agent')->nullable();
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
        Schema::dropIfExists('activity_likes');
    }
}
