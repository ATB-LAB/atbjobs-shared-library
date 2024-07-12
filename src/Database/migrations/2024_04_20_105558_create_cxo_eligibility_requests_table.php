<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCxoEligibilityRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cxo_eligibility_requests', function (Blueprint $table) {
            $table->id();
            $table->integer('candidate_id')->unsigned();
            $table->integer('job_id')->unsigned()->nullable();
            $table->tinyInteger('status')->comment("pending=0, approved=1, rejected=2")->default(false);
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cxo_eligibility_requests');
    }
}
