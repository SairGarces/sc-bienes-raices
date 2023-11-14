
<?php
$servername = "localhost";
$username = "root";
$password = "claudia";
$dbname = "bienesraices";
$port = 3300;

// Crea la conexión
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Verifica la conexión
if ($conn->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
}
// echo "Conexión exitosa";

function conectarDB() : PDO {
    $db = new PDO('mysql:host=localhost;dbname=bienesraices', 'root', 'root');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $db;
}