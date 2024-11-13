<?php
// Obtener variables de entorno
$servidor = getenv('DB_HOST');
$basedatos = getenv('DB_NAME');
$usuario = getenv('DB_USER');
$contrasena = getenv('DB_PASSWORD');

// Establecer conexión a la base de datos
$conexion2 = new mysqli($servidor, $usuario, $contrasena, $basedatos);

// Verificar la conexión
if ($conexion2->connect_errno) {
    echo "Error de conexión: Verifique sus datos.";
} else {
    echo "<h1>Conectado a la base de datos de almacén</h1>";
}
?>
