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
        Schema::create('waste_entries', function (Blueprint $table) {
            $table->id();
            $table->date('date')->comment('Fecha de ingreso');
            $table->string('area')->nullable()->comment('Área');
            $table->string('waste_type')->nullable()->comment('Tipo de residuo');
            $table->decimal('quantity', 10, 2)->nullable()->comment('Cantidad de residuo');
            $table->string('unit')->nullable()->comment('Unidad de medida (kg, m³, unidades)');
            $table->string('delivered_by')->nullable()->comment('Entregado por');
            $table->string('area_responsible')->nullable()->comment('Responsable del área');
            $table->string('document_number')->nullable()->comment('Número de documento asociado');
            $table->string('signature')->nullable()->comment('Firma (digital o referencia)');
            $table->text('observations')->nullable()->comment('Observaciones');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('waste_entries');
    }
};
