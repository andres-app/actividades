<?php
require_once BASE_PATH . '/app/Modelo/MdlActividad.php';

class CtrUsuario {

    public static function agendaHoy() {

        // ✅ Asegura que "hoy" sea según Perú
        date_default_timezone_set('America/Lima');

        // ✅ Día de la semana en número (1=Lunes ... 7=Domingo)
        $diasSemana = [
            1 => 'Lunes',
            2 => 'Martes',
            3 => 'Miercoles', // igual que tu BD (sin tilde)
            4 => 'Jueves',
            5 => 'Viernes',
            6 => 'Sabado',
            7 => 'Domingo'
        ];

        $diaNumero = (int) date('N');           // 1..7
        $diaHoy    = $diasSemana[$diaNumero];   // texto como en BD

        // Obtener actividades
        $actividades = MdlActividad::actividadesHoy($diaHoy) ?: [];

        // Cargar vista
        require BASE_PATH . '/app/Vista/usuario.php';
    }

    public static function marcarActividad() {
        header('Content-Type: application/json');
        echo json_encode([
            'ok' => true,
            'mensaje' => 'Actividad marcada correctamente'
        ]);
        exit;
    }
}
