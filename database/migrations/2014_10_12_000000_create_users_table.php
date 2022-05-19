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
            $table->string('email')->unique();//Valor unico
            $table->timestamp('email_verified_at')->nullable();//Confirmación de mail
            $table->string('password');//Pass encriptado.
            $table->rememberToken();//Para recordar inicio de sesión
            $table->timestamps();//Fecha y hora de registro en sistema.
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
