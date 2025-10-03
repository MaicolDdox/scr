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
        Schema::create('hazardous_wastes', function (Blueprint $table) {
            $table->id();
            $table->date('date')->comment('Fecha de generación del residuo');
            $table->string('generating_unit')->nullable()->comment('Unidad generadora (área o dependencia)');
            $table->string('waste_name')->nullable()->comment('Nombre del residuo peligroso');
            $table->string('hazard_characteristic')->nullable()->comment('Característica de peligrosidad (corrosivo, inflamable, etc.)');
            $table->string('frequency')->nullable()->comment('Frecuencia de generación');
            $table->string('physical_state')->nullable()->comment('Estado físico (sólido, líquido, gaseoso, pasta)');
            $table->decimal('quantity', 10, 2)->nullable()->comment('Cantidad generada');
            $table->string('unit')->nullable()->comment('Unidad de medida (kg, litros, unidades)');
            $table->string('delivered_by')->nullable()->comment('Entregado por');
            $table->string('registered_by')->nullable()->comment('Registrado por');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hazardous_wastes');
    }
};
