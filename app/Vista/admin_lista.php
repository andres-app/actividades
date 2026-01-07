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

            <?php if (!empty($actividades)): ?>
                <?php foreach ($actividades as $act): ?>

                    <div class="rounded-xl p-4 border"
                        style="background-color: <?= htmlspecialchars($act['color']) ?>20;
                    border-color: <?= htmlspecialchars($act['color']) ?>">

                        <div class="flex justify-between items-start mb-2">
                            <div>
                                <p class="text-lg font-bold">
                                    <?= htmlspecialchars($act['nombre']) ?>
                                </p>
                                <p class="text-sm text-gray-600">
                                    <?= htmlspecialchars($act['dias']) ?>
                                    · <?= substr($act['hora_inicio'], 0, 5) ?>
                                    – <?= substr($act['hora_fin'], 0, 5) ?>
                                </p>
                            </div>

                            <button onclick="editarActividad(<?= $act['id'] ?>)"
                                class="text-sky-600 text-sm">
                                Editar
                            </button>
                        </div>

                        <p class="text-sm text-gray-600">
                            📍 <?= htmlspecialchars($act['lugar']) ?>
                        </p>

                        <p class="text-xs text-gray-500 mt-1">
                            <?= $act['fecha_inicio'] ?> – <?= $act['fecha_fin'] ?>
                        </p>

                    </div>

                <?php endforeach; ?>
            <?php else: ?>
                <p class="text-center text-gray-500">
                    No hay actividades registradas
                </p>
            <?php endif; ?>

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

        function editarActividad(id) {
            window.location.href = "/calendario/public/index.php?view=admin_form&id=" + id;
        }

        function volverUsuario() {
            window.location.href = "/calendario/public";
        }
    </script>

</body>

</html>