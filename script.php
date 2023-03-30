<script>
        function create(nombre, precio, descripcion, stock, marca, id){
                const newElementNombre = document.createElement("input");
                newElementNombre.type = 'text';
                newElementNombre.name = 'nombre';
                newElementNombre.defaultValue = nombre;
                document.querySelector(".container").appendChild(newElementNombre);

                const newElementPrecio = document.createElement("input");
                newElementPrecio.type = 'number';
                newElementPrecio.name = 'precio';
                newElementPrecio.defaultValue = precio;
                document.querySelector(".container").appendChild(newElementPrecio);

                const newElementDescripcion = document.createElement("input");
                newElementDescripcion.type = 'text';
                newElementDescripcion.name = 'descripcion';
                newElementDescripcion.defaultValue = descripcion;
                document.querySelector(".container").appendChild(newElementDescripcion);

                const newElementStock = document.createElement("input");
                newElementStock.type = 'number';
                newElementStock.name = 'stock';
                newElementStock.defaultValue = stock;
                document.querySelector(".container").appendChild(newElementStock);

                const newElementMarca = document.createElement("input");
                newElementMarca.type = 'text';
                newElementMarca.name = 'marca';
                newElementMarca.defaultValue = marca;
                document.querySelector(".container").appendChild(newElementMarca);

                const newElementButton = document.createElement("button");
                newElementButton.name = "modificarDatos"
                newElementButton.textContent = 'Actualizar';
                document.querySelector(".container").appendChild(newElementButton);

                const newElementId = document.createElement("input");
                newElementId.type = 'hidden';
                newElementId.name = 'id';
                newElementId.defaultValue = id;
                document.querySelector(".container").appendChild(newElementId);

                const pausarBoton = document.querySelectorAll('.btn');
                pausarBoton.forEach(element => {
                        element.disabled = true;
                });
        }




</script>