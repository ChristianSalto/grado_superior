<?php
include './includes/header.php';
include './db/conection.php';

$id = $_GET['id'];
$sentecia_select = $con->prepare("SELECT * FROM productos WHERE id = '$id'");
$sentecia_select->execute();
$result = $sentecia_select->fetchAll();
?>

<?php foreach ($result as $fila) { ?>
  <div class="container">
    <h1>Detalles del producto</h1>
    <div class="card text-white bg-info mb-3">
      <div class="card-header"><?php echo $fila['nombre']; ?></div>
      <h5 class="card-title">Codigo: <?php echo $fila['id']; ?></h5>

      <div class="card-body">
        <p class="card-text">Nombre: <?php echo $fila['nombre']; ?></p>
        <p class="card-text">Nombre Corto: <?php echo $fila['nombreCorto']; ?></p>
        <p class="card-text">Codigo Familia: <?php echo $fila['familia']; ?></p>
        <p class="card-text">PVP (€): <?php echo $fila['precio']; ?></p>
        <p class="card-text">Descripcion: <?php echo $fila['descripcion']; ?></p>
      </div>
    </div>
  </div>
  <div class="div-volver">
    <a href="listado.php"><button type="button" class="btn btn-primary">VOLVER</button></a>
  </div>


<?php } ?>