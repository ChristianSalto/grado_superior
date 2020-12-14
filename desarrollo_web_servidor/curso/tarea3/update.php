<?php include './db/conection.php'; ?>

<?php
$id = $_GET['id'];
$sentecia_select = $con->prepare("SELECT * FROM productos WHERE id = '$id'");
$sentecia_select->execute();
$result = $sentecia_select->fetchAll();
?>

<?php include './crear.php' ?>