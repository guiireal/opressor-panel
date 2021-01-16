<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string('street_name');
            $table->string('address_code', 20)->nullable();
            $table->string('number', 10)->nullable();
            $table->string('complement', 20)->nullable();
            $table->string('neighborhood', 100)->nullable();
            $table->unsignedBigInteger('people_id');
            $table->foreign('people_id')->references('id')->on('peoples');
            $table->unsignedBigInteger('address_type_id');
            $table->foreign('address_type_id')->references('id')->on('address_types');
            $table->unsignedBigInteger('city_id');
            $table->foreign('city_id')->references('id')->on('cities');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('addresses');
    }
}
