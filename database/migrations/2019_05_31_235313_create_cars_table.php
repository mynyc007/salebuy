<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->string('body_type');
            $table->string('condition');
            $table->string('make');
            $table->string('model');
            $table->string('edition');
            $table->string('transmission');
            $table->string('mileage');
            $table->string('out_color');
            $table->string('in_color');
            $table->string('door');
            $table->string('Cylinder');
            $table->string('drive_type');
            $table->string('fuel');
            $table->string('alt_fuel')->nullable();
            $table->integer('price');
            $table->boolean('active')->default(0);
            $table->text('description', 500)->nullable();
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
        Schema::dropIfExists('cars');
    }
}
