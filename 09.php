<?php include 'includes/header.php';

// conectar a la BD con MySQL en la forma Orientada a objetos sin sentencias preparadas

$db = new mysqli('localhost', 'root', 'chuchimba', 'bienesraices_crud');

$query = "SELECT titulo FROM propiedades";
$resultado = $db->query($query);


while($row = $resultado->fetch_assoc()):
  var_dump($row);
endwhile;


//var_dump($resultado->fetch_assoc());


include 'includes/footer.php';