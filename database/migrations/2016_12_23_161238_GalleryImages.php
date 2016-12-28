<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GalleryImages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         /**
         * Running the Migration, creating Gallery Images table
         */
        Schema::create('gallery_images', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->binary('pic');
            $table->string('catergory_name');
            $table->timestamps();
        });
    }

     /**
     * Reverse the migrations. Dropping the table
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gallery_images');
    }
}
