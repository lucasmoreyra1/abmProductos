<form>

    Texto a buscar <input id="searchTerm" type="text" onkeyup="doSearch()" />

</form>

<div class="container-fluid p-3" >
    <table class="table table-sm text-center table-bordered" id="datos">
        <tr class="table-active">
            <td>Id producto</td>
            <td>Nombre</td>
            <td>Precio</td>
            <td>Descripcion</td>
            <td>Stock disponible</td>
            <td>Marca</td>
            <td colspan="2">Opciones</td>
        </tr>
    <?php foreach ($productos as $key): ?>
        <tr>
            <td><?php echo $key["id_producto"] ?></td>
            <td><?php echo $key["nombre"] ?></td>
            <td><?php echo $key["precio"] ?></td>
            <td><?php echo $key["descripcion"] ?></td>
            <td><?php echo $key["stock"] ?></td>
            <td><?php echo $key["marca_nombre"] ?></td>

            <form action="./logic.php" method="post">
                <input type="hidden" name="id_producto" value="<?php echo $key['id_producto'] ?>">
                <td> <button class="btn btn-outline-danger" name="delete" ><i class="bi bi-trash3"></i></button> </td>
            </form>

            <td> <button class="btn btn-outline-primary" onclick="create(`<?php echo $key['nombre']?>`, <?php echo $key['precio']?>, `<?php echo $key['descripcion']?>`, <?php echo $key['stock']?>, `<?php echo $key['marca_nombre']?>`, <?php echo $key['id_producto']?>, 'actualizar')"><i class="bi bi-pencil"></i></button> </td>

        </tr>


    <?php endforeach;
        require 'script.php';

    ?>
        <tr class='noSearch hide'>

            <td colspan="8"></td>

        </tr>
    </table>
</div>

<form action="./logic.php" method="post">
    <section class="container"></section>
</form>




