<?php


if (isset($_POST['username']) && isset($_POST['password'])) {

    $connect = mysql_connect("localhost", "root", "" or die ("No se ha podido conectar..."));
    mysql_select_db("phplogin" or die("No se encontro la DB"));

} else {
    die("Por favor, introduzca sus credenciales de acceso!");
}

?>