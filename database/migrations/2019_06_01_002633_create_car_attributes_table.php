<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_attributes', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->integer('car_id');
            $table->boolean('ac_front')->default(0);
            $table->boolean('ac_rear')->default(0);
            $table->boolean('cruise_control')->default(0);
            $table->boolean('navigation')->default(0);
            $table->boolean('power_locks')->default(0);
            $table->boolean('power_steering')->default(0);
            $table->boolean('keyless_entry')->default(0);
            $table->boolean('integrated_phone')->default(0);
            $table->boolean('bucket_seats')->default(0);
            $table->boolean('leather_interior')->default(0);
            $table->boolean('memory_seat')->default(0);
            $table->boolean('power_seat')->default(0);

            $table->boolean('airbag_driver')->default(0);
            $table->boolean('airbag_passenger')->default(0);
            $table->boolean('airbag_side')->default(0);
            $table->boolean('antilock_brakes')->default(0);
            $table->boolean('fog_light')->default(0);

            $table->boolean('power_window')->default(0);
            $table->boolean('r_w_defroster')->default(0);
            $table->boolean('r_w_wiper')->default(0);
            $table->boolean('tinted_glass')->default(0);

            $table->boolean('am_fm')->default(0);
            $table->boolean('cassette_player')->default(0);
            $table->boolean('cd_single')->default(0);
            $table->boolean('cd_multi')->default(0);
            $table->boolean('premium_sound')->default(0);
            $table->boolean('dvd')->default(0);
            $table->boolean('alloy_wheel')->default(0);
            $table->boolean('moon_sunroof')->default(0);
            $table->boolean('third_row_seat')->default(0);

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
        Schema::dropIfExists('car_attributes');
    }
}
