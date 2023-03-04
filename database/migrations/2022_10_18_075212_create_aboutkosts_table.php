<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aboutkosts', function (Blueprint $table) {
            $table->id();
            $table->integer('iduser');
            $table->integer('idfasili');
            $table->string('name');
            $table->string('description');
            $table->string('address');
            $table->bigInteger('mainP')->nullable();
            $table->bigInteger('secondP')->nullable();
            $table->bigInteger('roomP')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aboutkosts');
    }
};
