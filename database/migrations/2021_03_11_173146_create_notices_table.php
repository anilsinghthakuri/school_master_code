<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoticesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notices', function (Blueprint $table) {

            $table->id('notice_id');
            $table->unsignedBigInteger('notice_category_id');
            $table->string('notice_heading');
            $table->longText('notice_description')->nullable();
            $table->unsignedBigInteger('notice_type_id');
            $table->string('notice_file');

            $table->timestamps();

            $table->foreign('notice_category_id')->references('notice_category_id')->on('notice_categories')->onDelete('cascade');
            $table->foreign('notice_type_id')->references('notice_type_id')->on('notice_types')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notices');
    }
}
