<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoodPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food_packages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('packageType');
            $table->string('title');
            $table->integer('price');
            $table->integer('discountPrice')->default(0);
            $table->text('description')->nullable();
            $table->tinyInteger( 'status')->default(0);
            $table->string('image')->nullable();
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
        Schema::dropIfExists('food_packages');
    }
}
