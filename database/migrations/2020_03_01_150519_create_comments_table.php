<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->string('com_id',20);
            $table->string('name',50);
            $table->string('email',50);
            $table->String('message',200);
            $table->string('salon_id',20);

            $table->timestamps();

            $table->primary('com_id');
            

            $table->foreign('salon_id')->references('salon_id')->on('salon_owners');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
