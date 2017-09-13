<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlaylistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('playlists', function (Blueprint $table) {
            $table->increments('id');
            $table->string('playlistName');
            $table->string('song0');
            $table->string('artist0');
            $table->string('song1');
            $table->string('artist1');
            $table->string('song2');
            $table->string('artist2');
            $table->string('song3');
            $table->string('artist3');
            $table->string('song4');
            $table->string('artist4');
            $table->string('song5');
            $table->string('artist5');
            $table->string('song6');
            $table->string('artist6');
            $table->string('song7');
            $table->string('artist7');
            $table->string('song8');
            $table->string('artist8');
            $table->string('song9');
            $table->string('artist9');
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
        Schema::dropIfExists('playlists');
    }
}
