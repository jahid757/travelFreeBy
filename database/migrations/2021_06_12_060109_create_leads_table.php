<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->string('for')->nullable();
            $table->string('customer_id');
            $table->string('type')->nullable();
            $table->string('city')->nullable();
            $table->string('apartment')->nullable();
            $table->string('locality')->nullable();
            $table->integer('bedrooms')->nullable();
            $table->string('floorPreference')->nullable();
            $table->string('availability')->nullable();
            $table->string('deliveryExpected')->nullable();
            $table->uuid('uuid')->nullable();
            $table->integer('expectedPrice')->nullable();
            $table->string('prange')->nullable();
            $table->string('timeFrame')->nullable();
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
        Schema::dropIfExists('leads');
    }
}
