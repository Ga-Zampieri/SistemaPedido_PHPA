<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'restaurante');

//CREATE CONNECTION TO DB
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

//Conexão com o banco não deu bom.
if (!$conn) {
    die("Failed to Connect to MySQL" . mysqli_connect_error());
}
?>