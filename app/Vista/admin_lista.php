<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Admin · Actividades</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-br from-sky-200 to-emerald-200 min-h-screen flex items-center justify-center">

<div class="w-full max-w-md bg-white rounded-3xl shadow-xl p-5 flex flex-col">

    <!-- Header -->
    <div class="flex items-center justify-between mb-5">
        <h1 class="text-xl font-bold text-gray-800">
            ⚙️ Actividades
        </h1>

        <button onclick="nuevaActividad()"
            class="bg-emerald-600 text-white px-4 py-2 rounded-xl text-sm">
            ➕ Nueva
        </button>
    </div>

    <!-- LISTA DE ACTIVIDADES -->
    <div class="space-y-4 flex-1 overflow-y-auto">

        <!-- ACTIVIDAD: FÚTBOL -->
        <div class="bg-sky-50 border border-sky-200 rounded-xl p-4">

            <div class="flex justify-between items-start mb-2">
                <div>
                    <p class="text-lg font-bold text-sky-700">
                        ⚽ Fútbol
                    </p>
                    <p class="text-sm text-gray-600">
                        Mié · Vie · 08:00 – 09:00
                    </p>
                </div>

                <button onclick="editarActividad()"
                    class="text-sky-600 text-sm">
                    Editar
                </button>
            </div>

            <p class="text-sm text-gray-600">
                📍 Morococha – Surquillo
            </p>

            <p class="text-xs text-gray-500 mt-1">
                05/01/2026 – 31/01/2026
            </p>

        </div>

        <!-- ACTIVIDAD: BASKET -->
        <div class="bg-emerald-50 border border-emerald-200 rounded-xl p-4">

            <div class="flex justify-between items-start mb-2">
                <div>
                    <p class="text-lg font-bold text-emerald-700">
                        🏀 Basketball
                    </p>
                    <p class="text-sm text-gray-600">
                        Sáb · Dom · 10:00 – 11:00
                    </p>
                </div>

                <button onclick="editarActividad()"
                    class="text-emerald-600 text-sm">
                    Editar
                </button>
            </div>

            <p class="text-sm text-gray-600">
                📍 Parque Los Sauces – Surquillo
            </p>

            <p class="text-xs text-gray-500 mt-1">
                05/01/2026 – 31/01/2026
            </p>

        </div>

    </div>

    <!-- FOOTER NAV -->
    <div class="pt-4">
        <button onclick="volverUsuario()"
            class="w-full bg-sky-600 hover:bg-sky-700 text-white py-3 rounded-xl text-base transition">
            👦 Ver agenda del niño
        </button>
    </div>

</div>

<script>
function nuevaActividad() {
    window.location.href = "/calendario/public/index.php?view=admin_form";
}

function editarActividad() {
    window.location.href = "/calendario/public/index.php?view=admin_form";
}

function volverUsuario() {
    window.location.href = "/calendario/public";
}
</script>

</body>
</html>
