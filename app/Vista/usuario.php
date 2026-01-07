<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agenda de Verano</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-br from-sky-200 to-emerald-200 min-h-screen flex items-center justify-center">

<div class="w-full max-w-md bg-white rounded-3xl shadow-xl p-5">

    <!-- Encabezado -->
    <div class="text-center mb-5">
        <h1 class="text-2xl font-bold text-sky-700">📅 Mi Agenda</h1>
        <p class="text-sm text-gray-500">Hola Mariano 👋</p>
    </div>

    <!-- Fecha -->
    <div class="text-center mb-5 text-gray-700 font-semibold">
        Hoy · Miércoles 08
    </div>

    <!-- ACTIVIDAD: FÚTBOL -->
    <div class="mb-4 bg-sky-50 border border-sky-200 rounded-xl p-4">

        <!-- Horario -->
        <p class="text-xl font-bold text-sky-700 mb-1">
            08:00 – 09:00
        </p>

        <!-- Actividad -->
        <p class="font-medium text-gray-800 mb-2">
            ⚽ FÚTBOL
        </p>

        <!-- Detalles -->
        <p class="text-sm text-gray-600 mb-1">
            📅 <strong>Días:</strong> Miércoles – Viernes
        </p>

        <p class="text-sm text-gray-600 mb-3">
            📍 <strong>Morococha – Surquillo</strong>
        </p>

        <!-- Acción sutil -->
        <div class="flex justify-end">
            <button onclick="marcar(this)"
                class="flex items-center gap-2 text-sm text-gray-500 hover:text-emerald-600 transition">
                <span class="text-lg">⭕</span>
                Marcar
            </button>
        </div>
    </div>

    <!-- ACTIVIDAD: BASKET -->
    <div class="mb-4 bg-emerald-50 border border-emerald-200 rounded-xl p-4">

        <!-- Horario -->
        <p class="text-xl font-bold text-emerald-700 mb-1">
            10:00 – 11:00
        </p>

        <!-- Actividad -->
        <p class="font-medium text-gray-800 mb-2">
            🏀 BASKETBALL
        </p>

        <!-- Detalles -->
        <p class="text-sm text-gray-600 mb-1">
            📅 <strong>Días:</strong> Sábado – Domingo
        </p>

        <p class="text-sm text-gray-600 mb-3">
            📍 <strong>Parque Los Sauces – Surquillo</strong>
        </p>

        <!-- Acción sutil -->
        <div class="flex justify-end">
            <button onclick="marcar(this)"
                class="flex items-center gap-2 text-sm text-gray-500 hover:text-emerald-600 transition">
                <span class="text-lg">⭕</span>
                Marcar
            </button>
        </div>
    </div>

    <!-- Progreso -->
    <div class="mt-5 bg-emerald-100 rounded-xl p-4 text-center">
        <p class="font-semibold text-emerald-800">Progreso del día</p>
        <div class="w-full bg-emerald-200 rounded-full h-3 mt-2">
            <div id="barraProgreso"
                 class="bg-emerald-500 h-3 rounded-full transition-all duration-300"
                 style="width: 0%">
            </div>
        </div>
    </div>

    <!-- BOTÓN VER CALENDARIO -->
    <div class="mt-6">
        <button onclick="verCalendario()"
            class="w-full flex items-center justify-center gap-2
                   bg-sky-600 hover:bg-sky-700
                   text-white py-3 rounded-xl
                   text-base transition">
            📅 Ver calendario completo
        </button>
    </div>

</div>

<!-- JS -->
<script src="/calendario/public/js/usuario.js"></script>
</body>
</html>
