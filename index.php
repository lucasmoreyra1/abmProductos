<?php
    require "functions.php";
    require "./logic.php";

    $productos = showAll($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABM productos</title>
</head>
<body>
    <?php require "./table.php"; ?>
    <button onclick="create('',0,'',0,'',0, 'nuevoProducto')" >Nuevo producto</button>
    <button>Nueva marca/proveedor</button>
</body>
</html>