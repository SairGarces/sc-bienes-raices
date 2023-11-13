
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "bienesraices";

// Crea la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

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