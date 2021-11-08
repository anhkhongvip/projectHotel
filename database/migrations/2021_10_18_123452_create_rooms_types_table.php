<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->double('price');
            $table->integer('quantity');
            $table->string('description');
            $table->string('excerpt');
            $table->string('image');
            $table->string('room_size');
            $table->string('occupancy');
            $table->string('bed_size');
            $table->string('swimming_pool');
            $table->integer('bedroom');
            $table->integer('bathroom');
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
        Schema::dropIfExists('rooms_types');
    }
}
