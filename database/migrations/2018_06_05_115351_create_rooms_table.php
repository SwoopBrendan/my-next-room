<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name');
            $table->string('slug');
            $table->string('description', 2500)->nullable();
            $table->integer('length')->nullable()->unsigned();
            $table->integer('width')->nullable()->unsigned();
            $table->string('deposit');
            $table->integer('rent');
            $table->integer('lease_term_min')->nullable()->unsigned();
            $table->integer('lease_term_max')->nullable()->unsigned();
            $table->dateTime('available_from')->nullable();
            $table->dateTime('available_to')->nullable();
            $table->integer('room_count')->nullable()->unsigned();
            $table->integer('bathroom_count')->nullable()->unsigned();
            $table->integer('location_id')->unsigned();
            $table->integer('user_id')->unsigned();
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
