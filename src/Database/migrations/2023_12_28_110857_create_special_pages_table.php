<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecialPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('special_pages', function (Blueprint $table) {
            $table->id();
            $table->string('route_name');
            $table->text('header_text')->nullable();
            $table->text('footer_text')->nullable();
            $table->string('header_background_image')->nullable();
            $table->string('body_background_image')->nullable();
            $table->string('footer_background_image')->nullable();
            $table->text('param')->nullable();
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
        Schema::dropIfExists('special_pages');
    }
}
