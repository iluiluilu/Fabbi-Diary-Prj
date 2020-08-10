<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiaryViewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diary_views', function (Blueprint $table) {
            $table->id();
            $table->integer('diary_id')->unique();
            $table->integer('view')->nullable();
            $table->timestamps();
            $table->foreign('diary_id')->references('id')->on('diaries');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diary_views');
    }
}
