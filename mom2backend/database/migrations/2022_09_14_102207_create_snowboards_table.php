<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('snowboards', function (Blueprint $table) {
            $table->id();
            //lägger till tabellerna o deras datatyper
            $table->string('name', 64);
            $table->integer('length', 3);
            $table->boolean('gender');
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
        Schema::dropIfExists('snowboards');
    }
};
