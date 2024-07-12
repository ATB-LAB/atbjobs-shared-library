<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToCandidates extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('candidates', function (Blueprint $table) {
            $table->string('father_name')->nullable()->after('gender');
            $table->string('mother_name')->nullable()->after('father_name');
            $table->string('nationality')->nullable()->after('mother_name');
            $table->string('religion')->nullable()->after('nationality');
            $table->string('current_location')->nullable()->after('religion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('candidates', function (Blueprint $table) {
            //
        });
    }
}
