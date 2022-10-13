<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {

            $table->string('app_id',20);
            $table->string('Cus_name',50);
            $table->string('email',50);
            $table->String('service',100);
            $table->string('date',20);
            $table->string('time',20);
            $table->string('salon_id',20);

            $table->timestamps();

            $table->primary('app_id');
            

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
        Schema::dropIfExists('appointments');
    }
}
