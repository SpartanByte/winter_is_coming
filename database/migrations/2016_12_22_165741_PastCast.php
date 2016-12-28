<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PastCast extends Migration
{

        /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        //  Creating Past Cast Table      
        Schema::create('past_casts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('actor')->unique();
            $table->string('character_played')->nullable();
            $table->timestamps();
            $table->date('deleted_at')->nullable();
            $table->string('episode_deceased');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('past_casts');
    }
}
