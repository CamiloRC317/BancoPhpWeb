<?php
require_once __DIR__ . '/vendor/autoload.php';

use App\Repositorios\RepositorioCliente;

$repositorio = new RepositorioCliente();
$clientes = $repositorio->ObtenerUsuarios();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
</head>
<body>
    <h1>Clientes registrados</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
        </tr>
        <?php foreach ($clientes as $cliente): ?>
        <tr>
            <td><?= htmlspecialchars($cliente->getId()) ?></td>
            <td><?= htmlspecialchars($cliente->getNombre()) ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>