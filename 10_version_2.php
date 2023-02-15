<?php include 'includes/header.php';

// conectar a la BD con PDO con sentencias preparadas

$db = new PDO('mysql:host=localhost; dbname=bienesraices_crud', 'root', 'chuchimba');

$query = "SELECT titulo, imagen FROM propiedades";

$stmt = $db->prepare($query);

$stmt->execute();

$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach($resultado as $propiedad):
echo $propiedad['titulo'];
echo "<br>";
echo $propiedad['imagen'];
echo "<br>";
endforeach;


include 'includes/footer.php';