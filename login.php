<?php

$username = $_POST['username'];
$password = $_POST['password'];

if ($username && $password) {

    $connect = mysql_connect("localhost", "root", "" or die ("No se ha podido conectar..."));
    mysql_select_db("phplogin" or die("No se encontró la DB"));

} else {
    die("Por favor, introduzca sus credenciales de acceso!");
}

?>