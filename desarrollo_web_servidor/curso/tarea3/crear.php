<?php include './includes/header.php'; ?>
<header>
  <?php

  // Con esta funcion -> isset() podremos comprobar si una variable esta definida y con el operador ternario en base 
  // a la comprobacion si es true sacara un titulo y si es false el otro,
  // basicamente como al actualizar necesitamos pasar el id, pues yo lo aprovecho para crear esta sentecia de control y
  // mostrar una cosa o la otra.
  echo isset($_GET['id']) ? "<h1>Modificar Producto</h1>" : "<h1>Crear producto</h1>";

  ?>
</header>
<main>


  <div class="container">

    <form action="" method="POST">
      <div class="row">
        <div class="col">
          <label for="name">Nombre</label>
          <input type="text" class="form-control" id="name" placeholder="" name="name" value="<?php echo $result[0]['nombre']; ?>" required>
        </div>
        <div class="col">
          <label for="shortName">Nombre Corto</label>
          <input type="text" class="form-control" id="shortName" placeholder="" value="<?php echo $result[0]['nombreCorto']; ?>" name="shortName" required>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <label for="precio">Precio</label>
          <input type="number" class="form-control" id="precio" placeholder="Precio(€)" name="price" value="<?php echo $result[0]['precio']; ?>" required>
        </div>
        <div class="col">
          <label for="familia">Familia</label>
          <select class="form-control" id="familia" name="family" required>
            <option selected="true" disabled="disabled"><?php echo $result[0]['familia']; ?> </option>
            <option value="Camaras">Camaras</option>
            <option value="Consolas">Consolas</option>
            <option value="Equipos multifuncion">Equipos multifuncion</option>
            <option value="Ordenadores">Ordenadores</option>
            <option value="Reproductores MP3">Reproductores MP3</option>
            <option value="Televisores">Televisores</option>
            <option value="Software">Software</option>
            <option value="Libros Electronicos">Libros Electronicos</option>
            <option value="Routers">Routers</option>
          </select>
        </div>
      </div>
      <div class="row text-area">
        <label for="exampleFormControlTextarea1">Descripcion</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descripcion" required>
        <?php echo isset($_GET['id']) ? $result[0]['descripcion'] : ""; ?>
        </textarea>
      </div>
      <button type="submit" class="btn btn-primary" name="submit">
        <?php echo !isset($_GET['id']) ? "Crear" : "Modificar"; ?>
      </button>
      <?php
      if (!isset($_GET['id'])) echo '<button type="reset" class="btn btn-success">LIMPIAR</button>';
      ?>

      <a href="listado.php"><button type="button" class="btn btn-info">VOLVER</button></a>
    </form>
  </div>
</main>

<?php

include './db/conection.php';

$name = $_POST['name'];
$shortName = $_POST['shortName'];
$price = $_POST['price'];
$family = $_POST['family'];
$descripcion = $_POST['descripcion'];


if (!empty($name)) {
  $sql = !isset($_GET['id']) ?
    "INSERT INTO productos(nombre,nombreCorto,familia,descripcion, precio)VALUES('$name','$shortName','$family','$descripcion','$price')" :
    "UPDATE productos SET nombre = '$name',nombreCorto = '$shortName',familia = '$family',descripcion = '$descripcion', precio = $price WHERE ID = '$id'";
  $result = $con->exec($sql);

  if (!$result) {
    die('<div class="alert alert-danger" role="alert">
             Fallo en la conexion de la base de datos !!!
         </div>');
  }

  echo !isset($_GET['id']) ?
    '<div class="alert alert-success" role="alert">
      Los datos se guardaron correctamente!;
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <a href="listado.php" class="alert-link">&times</a>
      </button>
     </div>'
    :
    '<div class="alert alert-primary" role="alert">
      Los datos se actualizaron correctamente!;
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <a href="listado.php" class="alert-link">&times</a>
      </button>
     </div>';
}

?>
</body>

</html>