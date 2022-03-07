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
        //drop tables here??
        Schema::dropIfExists('players');

        Schema::create('players', function (Blueprint $table) {
            $table->increments('player_id');
            $table->string('username');
            $table->string('email')->unique();
            $table->string('telephone', 11)->unique();
            $table->integer('wins');
            $table->integer('losses');
            $table->integer('draws');
            $table->integer('total_points');
            $table->date('joined');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
