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
        Schema::dropIfExists('games');

        Schema::create('games', function (Blueprint $table) {
            $table->increments('game_id');
            $table->unsignedInteger('player_1');
            $table->unsignedInteger('player_2');
            $table->integer('p1_score');
            $table->integer('p2_score');
            $table->date('played_at');
            $table->string('location');

            $table->foreign('player_1')
                ->references('player_id')
                ->on('players')->onDelete('cascade');
                
            $table->foreign('player_2')
                ->references('player_id')
                ->on('players')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('games');
    }
};
