<?php include './db/conection.php'; ?>


<?php
$id = $_GET['id'];
$sql = $con->prepare("DELETE FROM productos WHERE id = '$id'");
$sql->execute();


if ($sql->execute()) {

  echo "<strong>Producto de Codigo: $id Borrado Correctamente.</strong>
  <a href='listado.php'><button type='button' class='btn btn-info'>VOLVER</button></a>";
} else {
  echo 'Fallo de conexion !!!';
};
?>

<strong></strong>