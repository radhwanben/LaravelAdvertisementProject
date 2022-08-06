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
        Schema::create('annoces', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string("reference");
            $table->float('surface');
            $table->string('terrainbati');
            $table->string('file');
            $table->string('titre');
            $table->string('description');
            $table->float('prix');
            $table->string('photos');
            $table->string('localisation')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('annoces');
    }
};
