<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('registros', function (Blueprint $table) {

                $table->id(); 
                $table->date('fecha_recepcion');
                $table->string('modulo');
                $table->string('folio');
                $table->unsignedBigInteger('estado_id');
                $table->string('nombre_propietario');
                $table->string('telefono');
                $table->string('correo');
                $table->string('numero_serie');
                $table->string('modelo');
                $table->unsignedBigInteger('marca_id');
                $table->string('numero_factura');
                $table->date('fecha_factura');
                $table->string('rfc_curp');
                $table->unsignedBigInteger('identificacion_id');
                $table->string('numero_identificacion');
                $table->string('entidad_federativa');
                $table->string('numero_placa');
                $table->string('ejerc_validar');
                $table->unsignedBigInteger('aplica_id');
                $table->string('respuesta');
                $table->string('nombre_tramitador');
                $table->string('testigo_1');
                $table->string('testigo_2');
                $table->string('nota');
                $table->string('firma');
                $table->string('observacion');
                $table->timestamps();
    
                $table->foreign('estado_id')->references('id')->on('estado');
                
                $table->foreign('marca_id')->references('id')->on('marca');
    
                $table->foreign('aplica_id')->references('id')->on('aplica');
    
                $table->foreign('identificacion_id')->references('id')->on('identificacion');
            });
        }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registros');
    }
};
