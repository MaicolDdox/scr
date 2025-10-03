@extends('dashboard')

@section('content')
<div class="max-w-6xl mx-auto p-6">
    <h1 class="text-2xl font-bold mb-6">📊 Reportes de Residuos</h1>

    {{-- Gráfica de volumen total --}}
    <div class="bg-white rounded-xl shadow p-6 mb-10">
        <h2 class="text-lg font-semibold mb-4">Volumen Total</h2>
        <div id="chart-volume"></div>
    </div>

    {{-- Gráfica comparativa en el tiempo --}}
    <div class="bg-white rounded-xl shadow p-6">
        <h2 class="text-lg font-semibold mb-4">Comparación en el Tiempo</h2>
        <div id="chart-time"></div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
    // === GRÁFICA DE VOLUMEN TOTAL ===
    var optionsVolume = {
        chart: { type: 'bar', height: 350 },
        series: [{
            name: 'Volumen',
            data: [{{ $totalWasteEntries }}, {{ $totalHazardousWastes }}]
        }],
        xaxis: { categories: ['Residuos Normales', 'Residuos Peligrosos'] },
        colors: ['#4CAF50', '#E53935']
    };

    new ApexCharts(document.querySelector("#chart-volume"), optionsVolume).render();

    // === GRÁFICA DE COMPARACIÓN EN EL TIEMPO ===
    var optionsTime = {
        chart: { type: 'line', height: 350 },
        series: [
            {
                name: 'Residuos Normales',
                data: @json($wasteData)
            },
            {
                name: 'Residuos Peligrosos',
                data: @json($hazardousData)
            }
        ],
        xaxis: {
            categories: @json($dates), // 🔥 corregido
            title: { text: 'Fecha' }
        },
        yaxis: {
            title: { text: 'Cantidad de Residuos' }
        },
        stroke: { curve: 'smooth' },
        colors: ['#4CAF50', '#E53935']
    };

    new ApexCharts(document.querySelector("#chart-time"), optionsTime).render();
</script>
@endsection
