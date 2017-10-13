<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeoDistrictsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('geo_districts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('province_id')->unsigned()->default(0);
            $table->integer('city_id')->unsigned()->default(0);
            $table->string('name')->nullable();
            $table->boolean('status')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('geo_districts');
    }
}
