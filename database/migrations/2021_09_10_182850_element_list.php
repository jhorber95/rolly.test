<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ElementList extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('element_list', function (Blueprint $table) {
            $table->id();
            $table->string("name");

            $table->integer('type_list_id');
            $table->foreign('type_list_id')->references('id')->on('type_list');

            $table->integer('parent_id');
            $table->foreign('parent_id')->references('id')->on('element_list');
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
        Schema::dropIfExists('element_list');
    }
}
