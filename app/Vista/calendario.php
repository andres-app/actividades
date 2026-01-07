<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calendario Mensual</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-br from-sky-200 to-emerald-200 min-h-screen flex items-center justify-center">

<div class="w-full max-w-md bg-white rounded-3xl shadow-xl p-5">

    <!-- Header -->
    <div class="flex items-center justify-between mb-4">
        <button onclick="volverHoy()" class="text-sky-600 text-sm font-medium">
            ← Hoy
        </button>
        <h1 class="text-xl font-bold text-gray-800">Enero 2026</h1>
        <span class="w-10"></span>
    </div>

    <!-- Días de la semana -->
    <div class="grid grid-cols-7 text-center text-xs text-gray-500 mb-2">
        <div>L</div><div>M</div><div>M</div><div>J</div><div>V</div><div>S</div><div>D</div>
    </div>

    <!-- Calendario -->
    <div class="grid grid-cols-7 gap-2 text-center">

        <!-- Días vacíos -->
        <div></div><div></div><div></div>

        <!-- Días -->
        <button onclick="verDia(1)"  class="dia">1</button>
        <button onclick="verDia(2)"  class="dia">2</button>
        <button onclick="verDia(3)"  class="dia">3</button>
        <button onclick="verDia(4)"  class="dia">4</button>
        <button onclick="verDia(5)"  class="dia activo">5</button>
        <button onclick="verDia(6)"  class="dia activo">6</button>
        <button onclick="verDia(7)"  class="dia activo">7</button>

        <button onclick="verDia(8)"  class="dia activo">8</button>
        <button onclick="verDia(9)"  class="dia activo">9</button>
        <button onclick="verDia(10)" class="dia">10</button>
        <button onclick="verDia(11)" class="dia">11</button>
        <button onclick="verDia(12)" class="dia activo">12</button>
        <button onclick="verDia(13)" class="dia activo">13</button>
        <button onclick="verDia(14)" class="dia activo">14</button>

        <!-- continúa según el mes -->
    </div>

    <!-- Leyenda -->
    <div class="mt-5 text-xs text-gray-600 space-y-1">
        <p>🟢 Día con actividades</p>
        <p>⚪ Día sin actividades</p>
    </div>

</div>

<!-- estilos rápidos -->
<style>
.dia {
    padding: 0.75rem;
    border-radius: 0.75rem;
    background: #f1f5f9;
    font-weight: 600;
}
.dia:hover {
    background: #e0f2fe;
}
.dia.activo {
    background: #bbf7d0;
}
</style>

<script src="/calendario/public/js/usuario.js"></script>
</body>
</html>
