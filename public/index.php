<?php
define('BASE_PATH', dirname(__DIR__));

/* ===============================
   1. ACCIONES (POST / lógica)
   =============================== */
if (isset($_GET['action'])) {

    switch ($_GET['action']) {

        case 'guardar_actividad':
            require_once BASE_PATH . '/app/Controlador/CtrAdmin.php';
            CtrAdmin::guardarActividad();
            exit;
    }
}

/* ===============================
   2. VISTAS (GET / navegación)
   =============================== */
$view = $_GET['view'] ?? 'usuario';

switch ($view) {

    case 'admin':
        require_once BASE_PATH . '/app/Controlador/CtrAdmin.php';
        $actividades = CtrAdmin::listarActividades();
        require BASE_PATH . '/app/Vista/admin_lista.php';
        break;

    case 'admin_form':
        require BASE_PATH . '/app/Vista/admin_form.php';
        break;

    case 'calendario':
        require BASE_PATH . '/app/Vista/calendario.php';
        break;

    default:
        // 👉 AGENDA DEL NIÑO (DINÁMICA)
        require_once BASE_PATH . '/app/Controlador/CtrUsuario.php';
        CtrUsuario::agendaHoy();
        break;
}
