<?php

use App\Models\Ubicacion;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();

            $table->string('apellidos',60);
            $table->string('nombres',60);
            $table->string('identidad',20);
            $table->string('tel_movil')->nullable();
            $table->unsignedBigInteger('organizacion_id')->nullable();
            $table->unsignedBigInteger('cargo_id');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('ubicacion_id');
            $table->timestamps();

            $table->foreign('cargo_id')->references('id')->on('cargos')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('organizacion_id')->references('id')->on('orgaizacions')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('ubicacion_id')->references('id')->on('Ubicacions')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados');
    }
}
