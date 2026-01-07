<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Admin · Actividad</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-br from-sky-200 to-emerald-200 min-h-screen flex items-center justify-center">

    <div class="w-full max-w-md bg-white rounded-3xl shadow-xl p-5">

        <!-- Header -->
        <div class="flex items-center gap-3 mb-5">
            <button onclick="volverAdmin()"
                class="text-sky-600 text-lg">
                ←
            </button>
            <h1 class="text-xl font-bold text-gray-800">
                Nueva actividad
            </h1>
        </div>

        <!-- Formulario -->
        <form class="space-y-4"
            method="POST"
            action="/calendario/public/index.php?action=guardar_actividad">

            <!-- Nombre -->
            <div>
                <label class="block text-sm font-medium text-gray-600 mb-1">
                    Actividad
                </label>
                <input type="text"
                    name="nombre"
                    placeholder="Ej: Fútbol"
                    required
                    class="w-full border rounded-xl px-4 py-3 text-base">
            </div>

            <!-- Horario -->
            <div class="grid grid-cols-2 gap-3">
                <div>
                    <label class="block text-sm text-gray-600 mb-1">
                        Inicio
                    </label>
                    <input type="time"
                        name="hora_inicio"
                        required
                        class="w-full border rounded-xl px-3 py-2">
                </div>
                <div>
                    <label class="block text-sm text-gray-600 mb-1">
                        Fin
                    </label>
                    <input type="time"
                        name="hora_fin"
                        required
                        class="w-full border rounded-xl px-3 py-2">
                </div>
            </div>

            <!-- Días -->
            <div>
                <label class="block text-sm text-gray-600 mb-2">
                    Días
                </label>
                <div class="grid grid-cols-7 gap-2 text-center text-sm">

                    <label class="border rounded-lg py-2 cursor-pointer">
                        L
                        <input type="checkbox" name="dias[]" value="L" hidden>
                    </label>

                    <label class="border rounded-lg py-2 cursor-pointer">
                        M
                        <input type="checkbox" name="dias[]" value="M" hidden>
                    </label>

                    <label class="border rounded-lg py-2 cursor-pointer">
                        M
                        <input type="checkbox" name="dias[]" value="X" hidden>
                    </label>

                    <label class="border rounded-lg py-2 cursor-pointer">
                        J
                        <input type="checkbox" name="dias[]" value="J" hidden>
                    </label>

                    <label class="border rounded-lg py-2 cursor-pointer">
                        V
                        <input type="checkbox" name="dias[]" value="V" hidden>
                    </label>

                    <label class="border rounded-lg py-2 cursor-pointer">
                        S
                        <input type="checkbox" name="dias[]" value="S" hidden>
                    </label>

                    <label class="border rounded-lg py-2 cursor-pointer">
                        D
                        <input type="checkbox" name="dias[]" value="D" hidden>
                    </label>

                </div>
            </div>

            <!-- Lugar -->
            <div>
                <label class="block text-sm text-gray-600 mb-1">
                    Lugar
                </label>
                <input type="text"
                    name="lugar"
                    placeholder="Morococha – Surquillo"
                    required
                    class="w-full border rounded-xl px-4 py-3">
            </div>

            <!-- Fechas -->
            <div class="grid grid-cols-2 gap-3">
                <div>
                    <label class="block text-sm text-gray-600 mb-1">
                        Inicio
                    </label>
                    <input type="date"
                        name="fecha_inicio"
                        required
                        class="w-full border rounded-xl px-3 py-2">
                </div>
                <div>
                    <label class="block text-sm text-gray-600 mb-1">
                        Fin
                    </label>
                    <input type="date"
                        name="fecha_fin"
                        required
                        class="w-full border rounded-xl px-3 py-2">
                </div>
            </div>

            <!-- Color -->
            <div>
                <label class="block text-sm text-gray-600 mb-1">
                    Color
                </label>
                <input type="color"
                    name="color"
                    value="#22c55e"
                    class="w-20 h-10 border rounded-lg">
            </div>

            <!-- Acciones -->
            <div class="pt-4 flex gap-3">
                <button type="button"
                    onclick="volverAdmin()"
                    class="flex-1 border rounded-xl py-3">
                    Cancelar
                </button>

                <button type="submit"
                    class="flex-1 bg-emerald-600 text-white rounded-xl py-3">
                    Guardar
                </button>
            </div>

        </form>


    </div>

    <script>
        function volverAdmin() {
            window.location.href = "/calendario/public/index.php?view=admin";
        }
    </script>

</body>

</html>