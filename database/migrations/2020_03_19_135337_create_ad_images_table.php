<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ad_images', function (Blueprint $table) {
            $table->string('id');
            $table->string('ad_id',20);
            $table->string('image_name',150);
            $table->timestamps();

            $table->primary('id');
            $table->foreign('ad_id')->references('ad_id')->on('advertisements');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ad_images');
    }
}
