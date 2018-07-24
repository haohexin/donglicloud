<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeviceCategoryFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('device_category_fields', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('device_category_id');
            $table->bigInteger('field_id');
            $table->integer('bit');
            $table->integer('length')->default(2);
            $table->boolean('display')->default(true);
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
        Schema::dropIfExists('device_category_fields');
    }
}
