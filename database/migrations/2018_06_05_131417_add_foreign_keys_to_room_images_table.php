<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToRoomImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('room_images', function (Blueprint $table) {
            $table->foreign('room_id', 'room_images_rooms_fk')->references('id')->on('room')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('image_id', 'room_images_images_fk')->references('id')->on('images')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('room_images', function (Blueprint $table) {
            $table->dropForeign('room_images_rooms_fk');
            $table->dropForeign('room_images_images_fk');
        });
    }
}
