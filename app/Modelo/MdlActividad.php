<?php
require_once BASE_PATH . '/app/Config/Conexion.php';

class MdlActividad
{

    public static function guardar($data)
    {
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

    public static function listar()
    {
        $db = Conexion::conectar();

        $sql = "SELECT * 
                FROM actividades 
                WHERE estado = 1
                ORDER BY hora_inicio";

        $stmt = $db->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public static function actividadesHoy($dia) {

        $sql = "SELECT *
                FROM actividades
                WHERE estado = 1
                AND dias LIKE :dia
                AND fecha_inicio <= CURDATE()
                AND fecha_fin >= CURDATE()
                ORDER BY hora_inicio ASC";
    
        $stmt = Conexion::conectar()->prepare($sql);
        $stmt->bindValue(':dia', "%$dia%");
        $stmt->execute();
    
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    
}
