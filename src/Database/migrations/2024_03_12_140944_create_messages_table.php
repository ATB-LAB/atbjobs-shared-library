<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->integer('from_id')->unsigned();
            $table->integer('to_id')->unsigned()->nullable();
            $table->integer('root_id')->unsigned()->nullable();
            $table->string('attachment', 200)->nullable();
            $table->text('content');
            $table->integer('state')->default(0);
            $table->integer('archived_at_from')->default(0);
            $table->integer('archived_at_to')->default(0);
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
        Schema::dropIfExists('messages');
    }
}
