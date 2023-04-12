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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <title>ABM productos</title>
</head>
<body>
    <div>
        <?php require "./table.php"; ?>
    </div>
    <div class="mb-3 text-center">
        <button class="btn btn-secondary rounded-pill px-2" onclick="create('',0,'',0,'',0, 'nuevoProducto')" >Nuevo producto</button>
        <button class="btn btn-secondary rounded-pill px-2" onclick="createMarca()">Nueva marca/proveedor</button>
    </div>
    <div>
        <?php require "tableMarcas.php"; ?>
    </div>
</body>
</html>