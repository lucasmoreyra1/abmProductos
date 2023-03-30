<?php
    require 'datbase.php';

    function loadProduct($conn, $nombre, $precio, $descripcion, $stock){
        $load = "INSERT INTO productos (nombre, precio, descripcion, stock) VALUES (:nombre, :precio, :descripcion, :stock)";
        $stmt = $conn->prepare($load);
        $stmt ->bindParam(':nombre', $nombre);
        $stmt ->bindParam(':precio', $precio);
        $stmt ->bindParam(':descripcion', $descripcion);
        $stmt ->bindParam(':stock', $stock);
        $result = $stmt->execute();
        return $result;
    }

    function loadMarca($conn, $id_producto, $nombre){
        $load = "INSERT INTO marca (id_producto, nombre) VALUES (:id_producto, :nombre)";
        $stmt = $conn->prepare($load);
        $stmt -> bindParam(':id_producto', $id_producto);
        $stmt -> bindParam(':nombre', $nombre);
        $result = $stmt->execute();
        return $result;
    }

    function searchID($conn, $nombre){
        $sql = "SELECT id_producto FROM productos WHERE nombre=:nombre";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->execute();
        $results = $stmt->fetch(PDO::FETCH_ASSOC);
        return $results;
    }

    
?>