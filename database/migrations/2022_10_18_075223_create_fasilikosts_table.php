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
        Schema::create('fasilikosts', function (Blueprint $table) {
            $table->id();
            $table->boolean('bathroom')->default(false);
            $table->boolean('kitchen')->default(false);
            $table->boolean('mattress')->default(false);
            $table->boolean('cupboard')->default(false);
            $table->boolean('icebox')->default(false);
            $table->boolean('wifi')->default(false);
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
        Schema::dropIfExists('fasilikosts');
    }
};
