<?php
require_once BASE_PATH . '/app/Modelo/MdlActividad.php';

class CtrAdmin {

    public static function listarActividades() {
        return MdlActividad::listar();
    }

    public static function guardarActividad() {

        $dias = implode(',', $_POST['dias'] ?? []);

        $data = [
            'nombre'        => $_POST['nombre'],
            'hora_inicio'   => $_POST['hora_inicio'],
            'hora_fin'      => $_POST['hora_fin'],
            'dias'          => $dias,
            'lugar'         => $_POST['lugar'],
            'fecha_inicio'  => $_POST['fecha_inicio'],
            'fecha_fin'     => $_POST['fecha_fin'],
            'color'         => $_POST['color']
        ];

        MdlActividad::guardar($data);

        header("Location: /calendario/public/index.php?view=admin");
        exit;
    }
}
