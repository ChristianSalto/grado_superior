  <?php
  include './db/conection.php';
  $sentecia_select = $con->prepare('SELECT * FROM productos');
  $sentecia_select->execute();
  $result = $sentecia_select->fetchAll();
  ?>


  <?php include './includes/header.php'; ?>
  <div class="container">
    <h1>Gestion de productos</h1>
    <a href="crear.php"><button type="button" class="btn btn-success">Crear</button></a>
    <table class="table table-dark table-striped">
      <thead>
        <tr>
          <th scope="col">Detalle</th>
          <th scope="col">Codigo</th>
          <th scope="col">Nombre</th>
          <th scope="col">Acciones</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($result as $fila) { ?>
          <tr>
            <td><a href="detalle.php?id=<?php echo $fila['id']; ?>"><button type="button" class="btn btn-primary">Detalle</button></a></td>
            <td><?php echo $fila['id']; ?></td>
            <td><?php echo $fila['nombre']; ?></td>
            <td>
              <a href="update.php?id=<?php echo $fila['id']; ?>"><button type=" button" class="btn btn-warning">Actualizar</button></a>
              <a href="borrar.php?id=<?php echo $fila['id']; ?>"><button type=" button" class="btn btn-danger">Borrar</button></a>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>

  <!-- SCRIPTS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </body>

  </html>