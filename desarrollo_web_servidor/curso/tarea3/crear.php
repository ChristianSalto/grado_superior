<?php include './includes/header.php'; ?>
<header>
  <h1>Crear producto</h1>
</header>
<main>
  <form action="">
    <div class="row">
      <div class="col">
        <label for="name">Nombre</label>
        <input type="text" class="form-control" id="name" placeholder="">
      </div>
      <div class="col">
        <label for="shortName">Nombre Corto</label>
        <input type="text" class="form-control" id="shortName" placeholder="">
      </div>
    </div>
    <div class="row">
      <div class="col">
        <label for="precio">Precio</label>
        <input type="text" class="form-control" id="precio" placeholder="Precio(€)">
      </div>
      <div class="col">
        <label for="familia">Familia</label>
        <select class="form-control" id="familia">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
      </div>
    </div>
    <div class="col">
      <label for="exampleFormControlTextarea1">Example textarea</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
  </form>
</main>
</body>

</html>