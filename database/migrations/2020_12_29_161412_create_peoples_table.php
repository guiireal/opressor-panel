<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeoplesTable extends Migration
{
    public function up()
    {
        Schema::create('peoples', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('document', 50);
            $table->string('document_secondary', 50)->nullable();
            $table->date('birthdate')->nullable();
            $table->string('mother_name')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('peoples');
    }
}
