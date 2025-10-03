<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HazardousWastes extends Model
{
    use HasFactory;

    protected $table = 'hazardous_wastes';

    /**
     * Campos que se pueden asignar masivamente
     */
    protected $fillable = [
        'date',                 // Fecha de generación del residuo
        'generating_unit',      // Unidad generadora (área o dependencia)
        'waste_name',           // Nombre del residuo peligroso
        'hazard_characteristic',// Característica de peligrosidad
        'frequency',            // Frecuencia de generación
        'physical_state',       // Estado físico (sólido, líquido, gaseoso, pasta)
        'quantity',             // Cantidad generada
        'unit',                 // Unidad de medida (kg, litros, unidades)
        'delivered_by',         // Entregado por
        'registered_by',        // Registrado por
    ];
}
