<?php
    if (isset($_POST['modificarDatos'])) {
        modifyProduct($conn, $_POST['nombre'], $_POST['precio'], $_POST['descripcion'], $_POST['stock'], $_POST['marca'], $_POST['id']);
    }
?>