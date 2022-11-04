<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('userid');
            $table->string('company');
            $table->string('companyid');
            $table->string('companyinitials');
            $table->Integer('role_id')->default(1)->useCurrent();
            $table->string('email');
            $table->string('gender')->nullable();
            $table->Integer('age')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->bigInteger('mobile')->nullable();
            $table->string('city')->nullable();
            $table->Integer('deal')->nullable();
            $table->Integer('value')->nullable();
            $table->string('file')->nullable();
            $table->string('companylogo')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('insta')->nullable();
            $table->string('linkedin')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
