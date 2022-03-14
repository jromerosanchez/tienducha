<html>
  <head>
    <title>Proceso de borrado de un producto</title>
  </head>
  <body>
    <h1>Borrando el producto...</h1>
  
<?php 

//incluimos la clase con la que trabajamos
require("./producto.php");


//recoger valores del form
$codigo = $_POST["codigo"];

//hemos recogido datos del formulario... creamos objeto
$productoNuevo = new Producto($codigo,$descripcion,$rebaja,$estarebajado,$precio);

//Vamos a por la
$SQLDelete = $productoNuevo-> getDeleteSQL();

echo "La sentencia SQL a ejecutar es: ".$SQLDelete."<br>";

$servername = "bbdd";
$username = "root";
$password = "secret";

try {
  $conn = new PDO("mysql:host=$servername;dbname=iaw_db", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
  die();
}

try {
    //la function exec está programada en la clase PDO,
    // y he leido que lo que hace es ejecutar el SQL que tenga
    //el parámetro dentro de la mysql a la que estemos conectados
   $conn->exec($SQLDelete);
   echo "Producto borrado";
} catch (PDOException $e) {
    echo "Error deleting record: " . $e->getMessage();
    die();
}

//cerramos la conexión
$conn = null;


?>
</br><a href="./index.html">Volver a inicio</a>
</body>
</html>