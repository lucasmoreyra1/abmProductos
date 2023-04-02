<script>
        function create(nombre, precio, descripcion, stock, marca, id, tipo){
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

                const newElementMarca = document.createElement("select");
                newElementMarca.name = 'marca';
                newElementMarca.className = "selectMarcas";
                document.querySelector(".container").appendChild(newElementMarca);
                let elementos = <?php echo $nombres_marca_json; ?>;
                //llama a la funcion para añadir los elementos al select
                addOptions(elementos); 

                if(tipo == 'actualizar'){

                        const newElementButton = document.createElement("button");
                        newElementButton.name = "modificarDatos"
                        newElementButton.textContent = 'Actualizar';
                        document.querySelector(".container").appendChild(newElementButton);

                        const newElementButtonCancelar = document.createElement("button");
                        newElementButtonCancelar.name = "cancelar"
                        newElementButtonCancelar.textContent = 'Cancelar';
                        document.querySelector(".container").appendChild(newElementButtonCancelar);

                }else if(tipo == 'nuevoProducto'){

                        const newElementButtonCargar = document.createElement("button");
                        newElementButtonCargar.name = "nuevoProducto"
                        newElementButtonCargar.textContent = 'Cargar Producto';
                        document.querySelector(".container").appendChild(newElementButtonCargar);

                        const newElementButtonCancelar = document.createElement("button");
                        newElementButtonCancelar.name = "cancelar"
                        newElementButtonCancelar.textContent = 'Cancelar';
                        document.querySelector(".container").appendChild(newElementButtonCancelar);
                }

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


        function createMarca(){
                const newElementProveedor = document.createElement("input");
                newElementProveedor.type = 'text';
                newElementProveedor.name = 'cargarMarca';
                document.querySelector(".containerProveedor").appendChild(newElementProveedor);

                const newElementButton = document.createElement("button");
                newElementButton.name = "cargarMarcaBoton";
                newElementButton.textContent = 'Cargar Marca';
                document.querySelector(".containerProveedor").appendChild(newElementButton);

                const newElementButtonCancelar = document.createElement("button");
                newElementButtonCancelar.name = "cancelar"
                newElementButtonCancelar.textContent = 'Cancelar';
                document.querySelector(".containerProveedor").appendChild(newElementButtonCancelar)
        }

        function addOptions(elementos){
                const select = document.querySelector('.selectMarcas');

                for (let i = 0; i < elementos.length; i++) {
                        console.log(elementos[i]);
                        const option = document.createElement("option");
                        option.value = elementos[i];
                        option.text = elementos[i];
                        select.add(option);
                }
        }




</script>