<?php 

try {
    $pdo = new PDO ('mysql:host=localhost;dbname=phplogin', 'root', '');

} catch (PDOException $e) {
    exit('Database error.');
}


?>