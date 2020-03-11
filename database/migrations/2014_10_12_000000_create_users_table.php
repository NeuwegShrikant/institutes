<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email', 190)->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('mobile_no')->nullable();
            $table->string('address')->nullable();
            $table->string('image')->nullable();
            $table->string('lat')->nullable();
            $table->string('lng')->nullable();
            $table->boolean('status')->nullable();
            $table->boolean('is_verified')->nullable();
            $table->boolean('is_deleted')->nullable();
            $table->boolean('is_enable')->nullable();
            $table->boolean('type')->nullable();
            $table->rememberToken();
            $table->string('current_lat')->nullable();
            $table->string('current_lng')->nullable();

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
