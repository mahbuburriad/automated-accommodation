<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postad', function (Blueprint $table) {
            $table->increments('pid');
            $table->string('location');
            $table->string('propertytype');
            $table->string('propertyfor');
            $table->integer('price');
            $table->integer('sqrft');
            $table->integer('bedroom');
            $table->integer('kitchen');
            $table->string('balcony');
            $table->string('description');

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
        Schema::dropIfExists('postad');
    }
}
