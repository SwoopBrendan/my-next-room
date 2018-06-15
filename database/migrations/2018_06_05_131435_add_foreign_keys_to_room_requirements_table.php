<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToRoomRequirementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('room_requirements', function (Blueprint $table) {
            $table->foreign('room_id', 'room_requirements_room_fk')->references('id')->on('room')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('requirement_id', 'room_requirements_requirement_fk')->references('id')->on('requirements')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('room_requirements', function (Blueprint $table) {
            $table->dropForeign('room_requirements_room_fk');
            $table->dropForeign('room_requirements_requirement_fk');
        });
    }
}
