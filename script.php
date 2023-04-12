<script>
        function create(nombre, precio, descripcion, stock, marca, id, tipo){
                const newElementNombre = document.createElement("input");
                newElementNombre.type = 'text';
                newElementNombre.name = 'nombre';
                newElementNombre.placeholder = "nombre";
                newElementNombre.defaultValue = nombre;
                newElementNombre.className = 'clase-utilizada';
                document.querySelector(".container").appendChild(newElementNombre);

                const newElementPrecio = document.createElement("input");
                newElementPrecio.type = 'number';
                newElementPrecio.name = 'precio';
                newElementPrecio.labels = 'precio'
                newElementPrecio.defaultValue = precio;
                document.querySelector(".container").appendChild(newElementPrecio);

                const newElementDescripcion = document.createElement("input");
                newElementDescripcion.type = 'text';
                newElementDescripcion.name = 'descripcion';
                newElementDescripcion.placeholder = 'Descripcion';
                newElementDescripcion.defaultValue = descripcion;
                document.querySelector(".container").appendChild(newElementDescripcion);

                const newElementStock = document.createElement("input");
                newElementStock.type = 'number';
                newElementStock.name = 'stock';
                newElementStock.placeholder = 'Stock';
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

                pausarBotones();
        }


        function createMarca(){
                const newElementProveedor = document.createElement("input");
                newElementProveedor.type = 'text';
                newElementProveedor.name = 'cargarMarca';
                document.querySelector(".containerMarcas").appendChild(newElementProveedor);

                const newElementButton = document.createElement("button");
                newElementButton.name = "cargarMarcaBoton";
                newElementButton.textContent = 'Cargar Marca';
                document.querySelector(".containerMarcas").appendChild(newElementButton);

                const newElementButtonCancelar = document.createElement("button");
                newElementButtonCancelar.name = "cancelar"
                newElementButtonCancelar.textContent = 'Cancelar';
                document.querySelector(".containerMarcas").appendChild(newElementButtonCancelar);

                pausarBotones();
        }

        function addOptions(elementos){
                const select = document.querySelector('.selectMarcas');

                for (let i = 0; i < elementos.length; i++) {
                        console.log(elementos[i]);
                        const option = document.createElement("option");
                        option.value = elementos[i]['nombre_marca'];
                        option.text = elementos[i]['nombre_marca'];
                        select.add(option);
                }
        }

        function modificarMarca(nombre_marca){
                const modificarMarca = document.createElement('input');
                modificarMarca.type = 'text';
                modificarMarca.name = 'modificarMarca'
                modificarMarca.defaultValue = nombre_marca;
                document.querySelector('.containerMarcas').appendChild(modificarMarca);

                const newElementButton = document.createElement("button");
                newElementButton.name = "modificarMarcaBoton";
                newElementButton.textContent = 'Cargar Marca';
                document.querySelector(".containerMarcas").appendChild(newElementButton);

                const newElementButtonCancelar = document.createElement("button");
                newElementButtonCancelar.name = "cancelar"
                newElementButtonCancelar.textContent = 'Cancelar';
                document.querySelector(".containerMarcas").appendChild(newElementButtonCancelar);

                const newElementId = document.createElement("input");
                newElementId.type = 'hidden';
                newElementId.name = 'nombre_anterior';
                newElementId.defaultValue = nombre_marca;
                document.querySelector(".containerMarcas").appendChild(newElementId);

                pausarBotones();
        }

        function pausarBotones(){
                const pausarBoton = document.querySelectorAll('.btn');
                pausarBoton.forEach(element => {
                        element.disabled = true;
                });
        }



        function doSearch()

{

    const tableReg = document.getElementById('datos');

    const searchText = document.getElementById('searchTerm').value.toLowerCase();

    let total = 0;



    // Recorremos todas las filas con contenido de la tabla

    for (let i = 1; i < tableReg.rows.length; i++) {

        // Si el td tiene la clase "noSearch" no se busca en su cntenido

        if (tableReg.rows[i].classList.contains("noSearch")) {

            continue;

        }



        let found = false;

        const cellsOfRow = tableReg.rows[i].getElementsByTagName('td');

        // Recorremos todas las celdas

        for (let j = 0; j < cellsOfRow.length && !found; j++) {

            const compareWith = cellsOfRow[j].innerHTML.toLowerCase();

            // Buscamos el texto en el contenido de la celda

            if (searchText.length == 0 || compareWith.indexOf(searchText) > -1) {

                found = true;

                total++;

            }

        }

        if (found) {

            tableReg.rows[i].style.display = '';

        } else {

            // si no ha encontrado ninguna coincidencia, esconde la

            // fila de la tabla

            tableReg.rows[i].style.display = 'none';

        }

    }



    // mostramos las coincidencias


     const lastTR=tableReg.rows[tableReg.rows.length-1];

    const td=lastTR.querySelector("td");

    lastTR.classList.remove("hide", "red");

    if (searchText == "") {

        lastTR.classList.add("hide");

    } else if (total) {

        td.innerHTML="Se ha encontrado "+total+" coincidencia"+((total>1)?"s":"");

    } else {

        lastTR.classList.add("red");

        td.innerHTML="No se han encontrado coincidencias";

    } 

}




</script>