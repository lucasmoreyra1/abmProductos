<table border="1">
    <tr>
        <td>Id producto: </td>
        <td>Nombre: </td>
        <td>Precio: </td>
        <td>descripcion: </td>
        <td>Stock disponible: </td>
        <td>marca: </td>
    </tr>
<?php foreach ($productos as $key): ?>
    <tr>
        <td><?php echo $key["id_producto"] ?></td>
        <td><?php echo $key["nombre"] ?></td>
        <td><?php echo $key["precio"] ?></td>
        <td><?php echo $key["descripcion"] ?></td>
        <td><?php echo $key["stock"] ?></td>
        <td><?php echo $key["marca_nombre"] ?></td>

        <form action="" method="post">
            <input type="hidden"  value="<?php echo $key["id_producto"] ?>" />
            <td> <button>Eliminar</button> </td>
        </form>

        <td> <button class="btn" onclick="create(`<?php echo $key['nombre']?>`, <?php echo $key['precio']?>, `<?php echo $key['descripcion']?>`, <?php echo $key['stock']?>, `<?php echo $key['marca_nombre']?>`, <?php echo $key['id_producto']?>)">Modificar</button> </td> 

    </tr>
<?php endforeach; 
    require 'script.php';
?>
</table>

<form action="" method="post">
    <section class="container"></section>
</form>

