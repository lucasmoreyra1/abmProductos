<?php
    require './functions.php';
    if (isset($_POST['modificarDatos'])) {
        modifyProduct($conn, $_POST['nombre'], $_POST['precio'], $_POST['descripcion'], $_POST['stock'], $_POST['marca'], $_POST['id']);
    }elseif(isset($_POST['nuevoProducto'])){
        loadProduct($conn, $_POST['nombre'], $_POST['precio'], $_POST['descripcion'], $_POST['stock'], $_POST['marca']);
    }

    if(isset($_POST['delete'])){
        deleteOne($conn, $_POST['id_producto']);
    }

    if (isset($_POST['cargarMarcaBoton'])) {
        cargarMarca($conn, $_POST['cargarMarca']);
    }

    header('Location: ./index.php');
?>