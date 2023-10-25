<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registros";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Falha na conexao" . mysqli_connect_error());
}
//echo "Conectado com sucesso";


?>