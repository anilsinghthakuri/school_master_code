<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->id('staff_id');
            $table->unsignedBigInteger('staff_category_id');
            $table->string('staff_name');
            $table->string('staff_image')->nullable();
            $table->string('staff_designation');
            $table->boolean('status')->default(1);
            $table->timestamps();

            $table->foreign('staff_category_id')->references('staff_category_id')->on('staff_categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staff');
    }
}
