<?php

class CtrUsuario {

    public static function inicio() {
        // Cargar vista usando ruta absoluta
        require_once BASE_PATH . '/app/Vista/usuario.php';
    }

    public static function marcarActividad() {
        header('Content-Type: application/json');
        echo json_encode([
            "ok" => true,
            "mensaje" => "Actividad marcada correctamente"
        ]);
    }
}
