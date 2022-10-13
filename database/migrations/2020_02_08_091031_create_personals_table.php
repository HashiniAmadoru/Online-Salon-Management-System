<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personals', function (Blueprint $table) {
            $table->string('reg_id',20);
            $table->string('name',50);
            $table->string('address',100);
            $table->string('email',50);
            $table->string('nic',15);
            $table->string('city');
            $table->String('phone1',10);
           
            
            $table->timestamps();

            $table->primary('reg_id');
            $table->unique('email');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personals');
    }
}
