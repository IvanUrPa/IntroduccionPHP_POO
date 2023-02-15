<?php include 'includes/header.php';

require 'vendor/autoload.php';

// namespaces para evitar choque de clases con el mismo nombre
use App\Clientes;
use App\Detalles;

//** incluir otras clases con autoload **/
// function mi_autoload($clase) {
  
//   $partes = explode('\\', $clase);
//   require __DIR__ . '/clases/' . $partes[1] . '.php';
// }
// spl_autoload_register('mi_autoload');


$detalles = new Detalles();
$clientes = new Clientes();

include 'includes/footer.php';