<?php
    require "functions.php";


    $productos = showAll($conn); // busca todos los datos de la base de datos para mostrarlos
    $nombres_marca = BuscarNombres_marca($conn); // busca solo los proveedores
    $nombres_marca_json =  json_encode($nombres_marca);
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
    <div>
        <?php require "./table.php"; ?>
    </div>
    <div>
        <button class="btn" onclick="create('',0,'',0,'',0, 'nuevoProducto')" >Nuevo producto</button>
        <button class="btn" onclick="createMarca()">Nueva marca/proveedor</button>
    </div>
    <div>
        <?php require "tableMarcas.php"; ?>
    </div>
</body>
</html>