## Puesta en marcha:

> Deberas tener MYSQL instalado con la siguiente base de datos:

### Tabla (productos):

| nombre | nombreCorto | familia | descripcion | precio |
| ------ | ----------- | ------- | ----------- | ------ |
| campo  | campo       | campo   | campo       | campo  |

### Configuracion base de datos:

```PHP
<?php

$database="" // nombre de la base de datos;
$user=""; // tu usuario
$password=""; // tu contraseña

try {
  $con=new PDO('mysql:host=localhost;dbname='.$database,$user,$password);
} catch (PDOException $e) {
  echo "Error",$e->getMessage();
}

?>
```

> Para la ejecucion del proyecto utiliza desde la ruta completa del proyecto y la terminal el comando:

> > php -S localhost:8080

luego al no disponer de un index.php nos dara un -> Not Found, añadimos a la ruta /listado.php o /nombrearchivo y ya se nos deberia ver el proyecto.
