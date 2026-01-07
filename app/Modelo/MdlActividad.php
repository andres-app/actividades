<?php
require_once BASE_PATH . '/app/Config/Conexion.php';

class MdlActividad {

    public static function guardar($data) {
        $db = Conexion::conectar();

        $sql = "INSERT INTO actividades
                (nombre, hora_inicio, hora_fin, dias, lugar, fecha_inicio, fecha_fin, color)
                VALUES
                (:nombre, :hora_inicio, :hora_fin, :dias, :lugar, :fecha_inicio, :fecha_fin, :color)";

        $stmt = $db->prepare($sql);

        return $stmt->execute([
            ':nombre' => $data['nombre'],
            ':hora_inicio' => $data['hora_inicio'],
            ':hora_fin' => $data['hora_fin'],
            ':dias' => $data['dias'],
            ':lugar' => $data['lugar'],
            ':fecha_inicio' => $data['fecha_inicio'],
            ':fecha_fin' => $data['fecha_fin'],
            ':color' => $data['color']
        ]);
    }

    public static function listar() {
        $db = Conexion::conectar();
        $stmt = $db->query("SELECT * FROM actividades WHERE estado = 1 ORDER BY hora_inicio");
        return $stmt->fetchAll();
    }
}
