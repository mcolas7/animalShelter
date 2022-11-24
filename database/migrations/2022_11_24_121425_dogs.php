<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Dogs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dogs', function (Blueprint $table) {
            $table->bigIncrements('dog_id');
            $table->unsignedBigInteger('sex_id');
            $table->unsignedBigInteger('size_id');
            $table->string('name',20);
            $table->string('image',50);
            $table->string('breed',50);
            $table->string('color',50);
            $table->boolean('adopted');
            $table->timestamps();

            $table->foreign('sex_id')->references('sex_id')->on('sexes');
            $table->foreign('size_id')->references('size_id')->on('sizes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dogs');
    }
}
