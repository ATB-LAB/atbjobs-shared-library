<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUiJobBenefitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ui_job_benefits', function (Blueprint $table) {
            $table->id();
            $table->integer('benefit_option_id')->nullable();
            $table->string('title')->nullable();
            $table->integer('priority')->nullable();
            $table->string('image')->nullable();
            $table->integer('total_job')->nullable();
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
        Schema::dropIfExists('ui_job_benefits');
    }
}
