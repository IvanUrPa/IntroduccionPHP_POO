<?php include 'includes/header.php';

// conectar a la BD con PDO

$db = new PDO('mysql:host=localhost; dbname=bienesraices_crud', 'root', 'chuchimba');

$query = "SELECT titulo FROM propiedades";

// consultar la base de datos
$propiedades = $db->query($query)->fetch();

var_dump($propiedades);



include 'includes/footer.php';