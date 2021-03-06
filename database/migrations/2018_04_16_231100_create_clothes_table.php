<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClothesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clothes', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->char('picture', 255)->nullable();
            $table->char('name', 255);
            $table->char('description', 255);
            $table->float('price', 8, 2);
            $table->integer('s')->nullable()->default(0);
            $table->integer('m')->nullable()->default(0);
            $table->integer('l')->nullable()->default(0);
            $table->integer('xl')->nullable()->default(0);
            $table->integer('xxl')->nullable()->default(0);
            $table->integer('category_id');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clothes');
    }
}
