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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('app');
            $table->string('apm');
            $table->string('email')->unique();
            $table->date('fn');
            $table->bigInteger('phone');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('type', ['Admin', 'Cliente']);
            $table->enum('status', ['Activo', 'Inactivo']);
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
