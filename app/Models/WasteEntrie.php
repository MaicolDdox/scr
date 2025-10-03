<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WasteEntrie extends Model
{
    use HasFactory;

    protected $table = 'waste_entries';

    /**
     * Campos que se pueden asignar masivamente
     */
    protected $fillable = [
        'date',             // Fecha de ingreso
        'area',             // Área
        'waste_type',       // Tipo de residuo
        'quantity',         // Cantidad de residuo
        'unit',             // Unidad de medida (kg, m³, unidades)
        'delivered_by',     // Entregado por
        'area_responsible', // Responsable del área
        'document_number',  // Número de documento asociado
        'signature',        // Firma (digital o referencia)
        'observations',     // Observaciones
    ];
}
