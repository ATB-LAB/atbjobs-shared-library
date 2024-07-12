<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidateCoverLettersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    protected $connection = 'mysql';
    public function up()
    {
        Schema::connection('mysql')->create('candidate_cover_letters', function (Blueprint $table) {
            $table->id();
            $table->foreignId('candidate_id')->nullable();
            $table->string('title')->nullable();
            $table->longText('text')->nullable();
            $table->string('file')->nullable();
            $table->integer('order')->nullable();
            $table->boolean('status')->default(0);
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
        Schema::dropIfExists('candidate_cover_letters');
    }
}
