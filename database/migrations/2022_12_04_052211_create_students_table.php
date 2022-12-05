<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');        
            // $table->integer('curso_id')->unsigned(); //es lo mismo de abajo
            $table->unsignedInteger('course_id')->nullable();
    
            /* Datos de Observador  */
            // $table->integer('observador')->unsigned();

            $table->string('nombre');
            $table->string('nombre2')->nullable();
            $table->string('apellido');
            $table->string('apellido2')->nullable();
            $table->string('tipo_documento')->nullable();
            $table->string('documento')->nullable();
            $table->string('genero')->nullable();
            $table->string('email')->nullable();
            $table->double('edad')->nullable();
            $table->string('direccion')->nullable();
            $table->string('telefono')->nullable();

            /* Datos del padre */
            $table->string('nombre_p')->nullable();
            $table->string('nombre2_p')->nullable();
            $table->string('apellido_p')->nullable();
            $table->string('apellido2_p')->nullable();
            $table->string('documento_p')->nullable();
            $table->string('profesion_p')->nullable();
            $table->string('telefono_p')->nullable();

            /* Datos de la made */
            $table->string('nombre_m')->nullable();
            $table->string('nombre2_m')->nullable();
            $table->string('apellido_m')->nullable();
            $table->string('apellido2_m')->nullable();
            $table->string('documento_m')->nullable();
            $table->string('profesion_m')->nullable();
            $table->string('telefono_m')->nullable();
        


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
        Schema::dropIfExists('students');
    }
}
