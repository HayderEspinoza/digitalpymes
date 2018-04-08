<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLendersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lenders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('city_id')->unsigned()->nullable();
            $table->string('address');
            $table->string('cellphone');
            $table->integer('service_id')->unsigned()->nullable();
            $table->integer('category_id')->unsigned()->nullable();
            $table->string('description')->nullable();
            $table->string('website')->nullable();
            $table->integer('stars')->default(0);
            $table->integer('visits')->default(0);
            $table->timestamps();

            $table->foreign('city_id')->references('id')->on('cities');
            $table->foreign('service_id')->references('id')->on('services');
            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lenders');
    }
}
