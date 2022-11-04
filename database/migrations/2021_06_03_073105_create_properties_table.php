<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('for')->nullable();
            $table->string('type')->nullable();
            $table->string('city')->nullable();
            $table->string('apartment')->nullable();
            $table->string('locality')->nullable();
            $table->longtext('address')->nullable();;
            $table->integer('bedrooms')->nullable();
            $table->integer('bathrooms')->nullable();
            $table->integer('balconies')->nullable();
            $table->integer('carpetArea')->nullable();
            $table->integer('superArea')->nullable();
            $table->string('areaUnitc')->nullable();
            $table->string('areaUnits')->nullable();
            $table->string('furnishing')->nullable();
            $table->integer('reservedParking')->nullable();
            $table->integer('totalFloors')->nullable();
            $table->integer('propertyOnFloor')->nullable();
            $table->string('availability')->nullable();
            $table->string('ageOfConstruction')->nullable();
            $table->string('possessionMonth')->nullable();
            $table->string('possessionYear')->nullable();
            $table->uuid('uuid')->nullable();
            $table->string('images')->nullable();
            $table->string('owership')->nullable();
            $table->integer('expectedPrice')->nullable();
            $table->string('prange')->nullable();
            $table->integer('tokenMoney')->nullable();
            $table->longtext('description')->nullable();
            $table->string('company');
            $table->string('agent');
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
        Schema::dropIfExists('properties');
    }
}
