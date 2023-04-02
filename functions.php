<?php
    require 'datbase.php';

    function loadProduct($conn, $nombre, $precio, $descripcion, $stock, $marca){
        $load = "INSERT INTO productos (nombre, precio, descripcion, stock) VALUES (:nombre, :precio, :descripcion, :stock)";
        $stmt = $conn->prepare($load);
        $stmt ->bindParam(':nombre', $nombre);
        $stmt ->bindParam(':precio', $precio);
        $stmt ->bindParam(':descripcion', $descripcion);
        $stmt ->bindParam(':stock', $stock);
        $result = $stmt->execute();

        loadMarca($conn, searchID($conn, $nombre)["id_producto"], $marca);

        return $result;
    }


    function loadMarca($conn, $id_producto, $nombre){
        $load = "INSERT INTO marca (id_producto, marca_nombre) VALUES (:id_producto, :nombre)";
        $stmt = $conn->prepare($load);
        $stmt -> bindParam(':id_producto', $id_producto);
        $stmt -> bindParam(':nombre', $nombre);
        $result = $stmt->execute();
        return $result;
    }

    function searchID($conn, $nombre){
        $sql = "SELECT MAX(id_producto) id_producto FROM productos WHERE nombre=:nombre";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->execute();
        $results = $stmt->fetch(PDO::FETCH_ASSOC);
        return $results;
    }

    function deleteProduct($conn, $id_producto){
        $sql = "DELETE FROM productos WHERE id_producto =:id_producto";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":id_producto", $id_producto);
        $result = $stmt->execute();
        return $result;
    }

    function showAll($conn){
        $sql = "SELECT * FROM productos inner join marca on productos.id_producto = marca.id_producto";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    function modifyProduct($conn, $nombre, $precio, $descripcion, $stock, $marca, $id){

        updateMarca($conn, $id, $marca);
        $sql = "UPDATE productos SET nombre=:nombre, precio=$precio, descripcion=:descripcion, stock=$stock WHERE id_producto=$id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":nombre", $nombre);
        $stmt->bindParam(":descripcion", $descripcion);

        $result = $stmt->execute();
        return $result;
    }

    function updateMarca($conn, $id_producto, $marca){
        $sql= "UPDATE marca SET marca_nombre = :marca_nombre WHERE id_producto=$id_producto";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam('marca_nombre', $marca);
        $result = $stmt->execute();
        return $result;
    }

    function deleteOne($conn, $id_producto){
        $sql = "DELETE FROM productos WHERE id_producto = :id_producto";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":id_producto", $id_producto);
        $result = $stmt->execute();

    }

    function cargarMarca($conn, $nombre_marca){
        $sql  = 'INSERT INTO nombres_marca (nombre_marca) VALUES (:nombre_marca)';
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':nombre_marca', $nombre_marca);
        $result = $stmt->execute();
        return $result;
    }

    function BuscarNombres_marca($conn){
        $sql = "SELECT id_marca, nombre_marca FROM nombres_marca";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    function actualizarMarca($conn, $nombre_anterior, $nombre_marca){
        $sql = 'UPDATE nombres_marca SET nombre_marca = :nombre_marca WHERE nombre_marca = :nombre_anterior';
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':nombre_marca', $nombre_marca);
        $stmt->bindParam(':nombre_anterior', $nombre_anterior);
        $result = $stmt->execute();
        actualziarProductosMarca($conn, $nombre_anterior, $nombre_marca);
        return $result;
    }

    function eliminarMarca($conn, $nombre_marca){
        $sql = "DELETE FROM nombres_marca WHERE nombre_marca=:id_marca";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id_marca', $nombre_marca);
        $result = $stmt->execute();
        return $result;
    }


    function actualziarProductosMarca($conn, $nombre_anterior, $nombre_marca){
        $sql = 'UPDATE marca SET marca_nombre = :nombre_marca WHERE marca_nombre = :nombre_anterior';
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':nombre_marca', $nombre_marca);
        $stmt->bindParam(':nombre_anterior', $nombre_anterior);
        $result = $stmt->execute();
        return $result;
    }
    //loadProduct($conn, "falcons verdes ", 100, "pintura verde", 10, "ford");
    //deleteProduct($conn, 4);

?>