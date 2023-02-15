<?php include 'includes/header.php';

// conectar a la BD con MySQL en la forma Orientada a objetos con sentencias preparadas

$db = new mysqli('localhost', 'root', 'chuchimba', 'bienesraices_crud');

// creacion del query
$query = "SELECT titulo, imagen FROM propiedades";

// preparacion del query
$stmt = $db->prepare($query);

// ejecucion del query
$stmt->execute();

// creacion de variable
$stmt->bind_result($titulo, $imagen);

// asignacion de resultado
//$stmt->fetch();

// impresion del resultado
// var_dump($titulo);
// var_dump($imagen);

while($stmt->fetch()):
  var_dump($titulo);
  var_dump($imagen);
endwhile;


include 'includes/footer.php';