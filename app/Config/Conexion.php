<?php

class Conexion {
    public static function conectar() {
        $host = "localhost";
        $db   = "actividades";
        $user = "root";
        $pass = "";

        try {
            $pdo = new PDO(
                "mysql:host=$host;dbname=$db;charset=utf8mb4",
                $user,
                $pass,
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                ]
            );
            return $pdo;
        } catch (PDOException $e) {
            die("Error BD: " . $e->getMessage());
        }
    }
}
