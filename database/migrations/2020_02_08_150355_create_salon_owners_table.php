<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalonOwnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salon_owners', function (Blueprint $table) {
            
            $table->string('salon_id',20);
            $table->string('salon_name',50);
            $table->string('salon_address',100);
            $table->string('reg_id');
            
            $table->timestamps();

            $table->primary('salon_id');
            $table->foreign('reg_id')->references('reg_id')->on('personals');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('salon_owners');
    }
}
