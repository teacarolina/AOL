<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            //$table->id();
            $table->increments('id');
            $table->timestamps();
            $table->string('email');
            $table->string('password');
        });
    }

    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
