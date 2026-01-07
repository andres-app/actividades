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

<?php
// Fecha actual (para asistencia futura)
$fechaHoy = date('Y-m-d');

// Texto amigable del día
$diasTexto = [
    'Mon' => 'Lunes',
    'Tue' => 'Martes',
    'Wed' => 'Miércoles',
    'Thu' => 'Jueves',
    'Fri' => 'Viernes',
    'Sat' => 'Sábado',
    'Sun' => 'Domingo'
];
?>

<div class="w-full max-w-md bg-white rounded-3xl shadow-xl p-5">

    <!-- Encabezado -->
    <div class="text-center mb-5">
        <h1 class="text-2xl font-bold text-sky-700">📅 Mi Agenda</h1>
        <p class="text-sm text-gray-500">Hola Mariano 👋</p>
    </div>

    <!-- Fecha -->
    <div class="text-center mb-5 text-gray-700 font-semibold">
        Hoy · <?= $diasTexto[date('D')] ?>
    </div>

    <!-- ================= ACTIVIDADES DINÁMICAS ================= -->
    <?php if (!empty($actividades)): ?>
        <?php foreach ($actividades as $act): ?>

            <div class="mb-4 border rounded-xl p-4"
                 style="background-color: <?= htmlspecialchars($act['color']) ?>20;
                        border-color: <?= htmlspecialchars($act['color']) ?>">

                <!-- ===== DATA OCULTA (PARA ASISTENCIA) ===== -->
                <input type="hidden" class="actividad-id" value="<?= $act['id'] ?>">
                <input type="hidden" class="actividad-fecha" value="<?= $fechaHoy ?>">

                <!-- Horario -->
                <p class="text-xl font-bold mb-1"
                   style="color: <?= htmlspecialchars($act['color']) ?>">
                    <?= substr($act['hora_inicio'], 0, 5) ?>
                    –
                    <?= substr($act['hora_fin'], 0, 5) ?>
                </p>

                <!-- Actividad -->
                <p class="font-medium text-gray-800 mb-2">
                    <?= htmlspecialchars($act['nombre']) ?>
                </p>

                <!-- Detalles -->
                <p class="text-sm text-gray-600 mb-1">
                    📅 <strong>Días:</strong> <?= htmlspecialchars($act['dias']) ?>
                </p>

                <p class="text-sm text-gray-600 mb-3">
                    📍 <strong><?= htmlspecialchars($act['lugar']) ?></strong>
                </p>

                <!-- Acción -->
                <div class="flex justify-end">
                    <button onclick="marcarActividad(this)"
                        class="flex items-center gap-2 text-sm text-gray-500 hover:text-emerald-600 transition">
                        <span class="text-lg">⭕</span>
                        Marcar
                    </button>
                </div>

            </div>

        <?php endforeach; ?>
    <?php else: ?>
        <p class="text-center text-gray-500">
            🎉 Hoy no tienes actividades programadas
        </p>
    <?php endif; ?>

    <!-- ================= PROGRESO ================= -->
    <div class="mt-5 bg-emerald-100 rounded-xl p-4 text-center">
        <p class="font-semibold text-emerald-800">Progreso del día</p>
        <div class="w-full bg-emerald-200 rounded-full h-3 mt-2">
            <div id="barraProgreso"
                 class="bg-emerald-500 h-3 rounded-full transition-all duration-300"
                 style="width: 0%">
            </div>
        </div>
    </div>

    <!-- ================= BOTÓN CALENDARIO ================= -->
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

<!-- ================= JS ================= -->
<script src="/calendario/public/js/usuario.js"></script>

</body>
</html>
