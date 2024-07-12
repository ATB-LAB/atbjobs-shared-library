<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameParentToEmployerAddInfoCategoryIdInEmployerAddInfoOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('employer_add_info_options', function (Blueprint $table) {
            $table->renameColumn('parent', 'employer_add_info_category_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('employer_add_info_options', function (Blueprint $table) {
            $table->renameColumn('employer_add_info_category_id', 'parent');
        });
    }
}
