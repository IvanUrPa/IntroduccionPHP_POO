<?php 

declare(strict_types = 1);

use Producto as GlobalProducto;

include 'includes/header.php';

// metodos estaticos

class Producto {

  public $imagen;
  public static $imagenPlaceholder = 'Imagen.jpg';

  public function __construct(protected string $nombre, public int $precio, public bool $disponible, string $imagen)
  {
    if($imagen) {
      self::$imagenPlaceholder = $imagen;
    }
  }

  public static function obtenerImagenProducto() {
    return self::$imagenPlaceholder;
  }

  public static function obtenerProducto() {
    echo "Obteniendo datos del producto";
  }

  public function mostrarProducto() : void{
    echo "El producto es: " . $this->nombre . " y su precio es de $ " . $this->precio;
  }

  public function getNombre() : string {
    return $this->nombre;
  }

  public function setNombre(string $nombre) {
    $this->nombre = $nombre;
  }
}


$producto = new Producto('Tablet', 200, true, '');
//$producto->mostrarProducto();
echo $producto->obtenerImagenProducto();
echo $producto->getNombre();
$producto->setNombre('Nuevo nombre');


echo "<pre>";
var_dump($producto);
echo "</pre>";

$producto2 = new Producto('Laptop', 1200, true, 'monitorcurvo.jpg');
//$producto2->mostrarProducto();
echo $producto2->getNombre();
echo $producto->obtenerImagenProducto();

// echo "<pre>";
// var_dump($producto2);
// echo "</pre>";

include 'includes/footer.php';