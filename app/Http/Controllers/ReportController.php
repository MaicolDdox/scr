<?php

namespace App\Http\Controllers;

use App\Models\HazardousWastes;
use App\Models\WasteEntrie;

class ReportController extends Controller
{
    public function index()
    {
        // 📊 Totales de volumen de residuos normales y peligrosos
        $totalWasteEntries = WasteEntrie::sum('quantity');
        $totalHazardousWastes = HazardousWastes::sum('quantity');

        // 📈 Datos agrupados por fecha para comparar cantidades
        $wasteEntriesByDate = WasteEntrie::selectRaw('date, SUM(quantity) as total')
            ->groupBy('date')
            ->orderBy('date')
            ->get();

        $hazardousWastesByDate = HazardousWastes::selectRaw('date, SUM(quantity) as total')
            ->groupBy('date')
            ->orderBy('date')
            ->get();

        // Preparar datos para ApexCharts
        $dates = $wasteEntriesByDate->pluck('date')
            ->merge($hazardousWastesByDate->pluck('date'))
            ->unique()
            ->sort()
            ->values();

        $wasteData = $dates->map(function ($date) use ($wasteEntriesByDate) {
            return optional($wasteEntriesByDate->firstWhere('date', $date))->total ?? 0;
        });

        $hazardousData = $dates->map(function ($date) use ($hazardousWastesByDate) {
            return optional($hazardousWastesByDate->firstWhere('date', $date))->total ?? 0;
        });

        return view('container.report.index', compact(
            'totalWasteEntries',
            'totalHazardousWastes',
            'dates',
            'wasteData',
            'hazardousData'
        ));
    }
}
