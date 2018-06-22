<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToUserFavouritesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_favourites', function (Blueprint $table) {
            $table->foreign('user_id', 'user_favourites_user_fk')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('room_id', 'user_favourites_room_fk')->references('id')->on('rooms')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_favourites', function (Blueprint $table) {
            $table->dropForeign('user_favourites_user_fk');
            $table->dropForeign('user_favourites_room_fk');
        });
    }
}
