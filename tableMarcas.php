<!-- <details> -->
    <summary>Ver y editar marcas</summary>
<table border="1">
    <tr>
        <td>Nombre marca: </td>
    </tr>

    <?php foreach ($nombres_marca as $key): ?>
        <tr>
            <td><?php echo $key['nombre_marca'] ?> </td>
            <td>
                <form action="./logic.php" method="post">
                    <input type="hidden" name="id_marca" value="<?php echo $key['nombre_marca'] ?>" >
                    <button class="btn" name="eliminar_marca" >Eliminar</button>
                </form>
            </td>
            <td><button class="btn" onclick="modificarMarca(`<?php echo $key['nombre_marca'] ?>`)" >Modificar</button></td>
        </tr>
    <?php endforeach; ?>
</table>
<form action="./logic.php" method="post">
    <section class="containerMarcas"></section>
</form>
<!-- </details> -->