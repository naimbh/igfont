<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('title')->default('Instagram Fonts Generator - IGFonts.Com');
            $table->string('logo')->default('logo.png');
            $table->string('limit')->default('100');
            $table->string('favicon')->default('favicon.ico');
            $table->string('bgcolor')->default("background: rgb(2, 0, 36);\nbackground: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(9, 9, 121, 1) 33%, rgba(0, 212, 255, 1) 100%);");
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
        Schema::dropIfExists('settings');
    }
}
