<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Cast extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        //  Creating Cast Table      
        Schema::create('casts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('actor')->unique();
            $table->string('character');
            $table->timestamps();
            $table->date('created_at')->nullable();
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
        Schema::drop('cast');
    }
}
