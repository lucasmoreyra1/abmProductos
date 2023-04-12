<!-- <details> -->
    <summary>Ver y editar marcas</summary>
<table class="table table-sm text-center table-bordered m-3" style="width:50%">
    <tr class="table-active">
        <td>Nombre marca</td>
        <td colspan="2">Opciones</td>
    </tr>

    <?php foreach ($nombres_marca as $key): ?>
        <tr>
            <td><?php echo $key['nombre_marca'] ?> </td>
            <td>
                <form action="./logic.php" method="post">
                    <input type="hidden" name="id_marca" value="<?php echo $key['nombre_marca'] ?>" >
                    <button class="btn btn-outline-danger" name="eliminar_marca" ><i class="bi bi-trash3"></i></button>
                </form>
            </td>
            <td><button class="btn btn-outline-primary" onclick="modificarMarca(`<?php echo $key['nombre_marca'] ?>`)" ><i class="bi bi-pencil"></i></button></td>
        </tr>
    <?php endforeach; ?>
</table>
<form action="./logic.php" method="post">
    <section class="containerMarcas"></section>
</form>
<!-- </details> -->