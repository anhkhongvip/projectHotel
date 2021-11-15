<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->integer('rooms_type_id');
            $table->string('name');
            $table->text('description');
            $table->string('image')->nullable();
            $table->text('excerpt')->nullable();
            $table->string('room_size')->nullable();
            $table->string('occupancy')->nullable();
            $table->string('bed_size')->nullable();
            $table->string('swimming_pool')->nullable();
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
        Schema::dropIfExists('rooms');
    }
}
