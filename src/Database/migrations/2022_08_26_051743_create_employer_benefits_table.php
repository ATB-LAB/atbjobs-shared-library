<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployerBenefitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql')->create('employer_benefits', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employer_id')->nullable();
            $table->foreignId('employer_add_info_category_id')->nullable();
            $table->foreignId('employer_add_info_option_id')->nullable();
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
        Schema::dropIfExists('employer_benefits');
    }
}
