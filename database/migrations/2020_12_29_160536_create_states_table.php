<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatesTable extends Migration
{

    public function up()
    {
        Schema::create('states', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->char('uf', 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('states');
    }
}
