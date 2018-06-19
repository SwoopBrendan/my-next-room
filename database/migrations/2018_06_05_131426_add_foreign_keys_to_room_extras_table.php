<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToRoomExtrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('room_extras', function (Blueprint $table) {
            $table->foreign('room_id', 'room_extras_room_fk')->references('id')->on('rooms')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('extra_id', 'room_extras_extra_fk')->references('id')->on('extras')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('room_extras', function (Blueprint $table) {
            $table->dropForeign('room_extras_room_fk');
            $table->dropForeign('room_extras_extra_fk');
        });
    }
}
