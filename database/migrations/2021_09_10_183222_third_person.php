<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ThirdPerson extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('third_person', function (Blueprint $table) {
            $table->id();
            $table->string("first_name");
            $table->string("second_name");
            $table->string("first_lastname");
            $table->string("second_lastname");
            $table->string("dni");

            $table->integer("type_dni_id");
            $table->foreign("type_dni_id")->references('id')->on('element_list');

            $table->integer("tax_payer_id");
            $table->foreign("tax_payer_id")->references('id')->on('element_list');

            $table->integer("municipality_id");
            $table->foreign("municipality_id")->references('id')->on('element_list');

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
        Schema::dropIfExists('third_person');
    }
}
