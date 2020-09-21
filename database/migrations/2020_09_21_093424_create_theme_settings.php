<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThemeSettings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('theme_settings', function (Blueprint $table) {
            $table->id();
            $table->integer('key')->unique();
            $table->string('value');
            $table->boolean('value1')->default(1);
            $table->boolean('value2')->default(1);
            $table->string('value3');
            $table->string('value4');
            $table->boolean('value5')->default(1);
            $table->boolean('value6')->default(1);
            $table->boolean('value7')->default(1);
            $table->boolean('value8')->default(1);
            $table->string('type')->nullable();
            $table->boolean('status')->default(1);
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
        Schema::dropIfExists('theme_settings');
    }
}
