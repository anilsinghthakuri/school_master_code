<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGalleryimagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galleryimages', function (Blueprint $table) {
            $table->id('gallery_image_id');
            $table->unsignedBigInteger('gallery_album_id');
            $table->string('gallery_image_name');

            $table->foreign('gallery_album_id')->references('gallery_album_id')->on('gallery_albums')->onDelete('cascade');
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
        Schema::dropIfExists('galleryimages');
    }
}
