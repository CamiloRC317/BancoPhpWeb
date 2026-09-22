<?php
namespace App\Nucleo;
use PDO;

require_once __DIR__."/../../config/basedatos.php";

class Conexion
{
    private static ?PDO $instancia = null;   // private: solo la propia clase la toca

    private function __construct() {}         // nadie puede hacer "new Conexion()" desde afuera

    public static function obtener(): PDO     // public: es la puerta de entrada
    {
        if (self::$instancia === null) {
            self::$instancia = new PDO(
            "mysql:host=localhost;dbname=db_banco_adso;charset=utf8mb4",
            "root",
            "1234"
        );
        }
        return self::$instancia;               // siempre la MISMA conexión
    }
}
?>
 