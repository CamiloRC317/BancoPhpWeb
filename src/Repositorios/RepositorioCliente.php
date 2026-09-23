<?php 
namespace App\Repositorios;

use App\Nucleo\Conexion;
use App\Modelos\Cliente;
use PDO;

class RepositorioCliente{
    private PDO $pdo;

    public function __construct()
    {
       $this->pdo=Conexion::obtener();
    }
    public function ObtenerUsuarios():array{
        $sql = "SELECT * FROM clientes";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();

        $usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $listaClientes=array();
        foreach($usuarios as $usuario){
            $cliente = new Cliente();
            $cliente->setNombre($usuario["nombre"]);
            $cliente->setId($usuario["id"]);
            $listaClientes[]=($cliente);
        }

        return $listaClientes;
    }
    
}
?>

