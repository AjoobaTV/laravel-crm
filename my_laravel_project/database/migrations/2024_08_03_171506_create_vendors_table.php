<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   // In the migration file

public function up()
{
    Schema::create('vendors', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('contact')->unique();
        $table->string('mobile')->nullable();
        $table->string('email')->nullable();
        $table->string('password');
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('vendors');
}

};
