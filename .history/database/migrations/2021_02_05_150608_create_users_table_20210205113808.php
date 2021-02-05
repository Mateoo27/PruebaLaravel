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
            $table->string('nombreUsuario')->nullable();;
            $table->string('nombreCompleto')->nullable();;
            $table->string('email')->nullable();
            $table->string('telefono')->nullable();;
            $table->string('edad')->nullable();;
            $table->date('fechaNacimento')->nullable();;

            $table->unsignedBigInteger('configs_id')->unsigned()->nullable();
            $table->foreign('configs_id')->references('id')->on('configs')->onDelete('cascade')->onUpdate('cascade');
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
