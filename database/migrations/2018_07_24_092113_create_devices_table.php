<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDevicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('customer_name')->nullable();
            $table->string('identify_number')->nullable();
            $table->string('identify_head_number')->nullable();
            $table->string('identify_middle_number')->nullable();
            $table->string('identify_tail_number')->nullable();
            $table->string('serial_number');
            $table->string('serial_add_number')->nullable();
            $table->bigInteger('user_id')->default(0);
            $table->bigInteger('category_id')->default(0);
            $table->bigInteger('district_id')->default(0);
            $table->bigInteger('province_id')->default(0);
            $table->bigInteger('city_id')->default(0);
            $table->bigInteger('status_id')->default(0);
            $table->boolean('running')->default(false);
            $table->boolean('warning')->default(false);
            $table->boolean('maintain')->default(false);
            $table->softDeletes();
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
        Schema::dropIfExists('devices');
    }
}
