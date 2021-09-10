<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableTypeListConstrains extends Migration
{
    public function up()
    {
        Schema::table('type_list', function (Blueprint $table) {
            $table->integer('parent_id');
            $table->foreign('parent_id')->references('id')->on('type_list');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('type_list', function (Blueprint $table) {
            $table->dropForeign('type_list_parent_id_foreign');
        });
    }
}
