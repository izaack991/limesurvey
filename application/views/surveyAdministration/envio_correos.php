<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/bootstrap_5/build/css/bootstrap_5.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" rel="stylesheet">
    <title>Envio de Correos</title>
</head>
<style>
    #tabla-container {
        width: 300px;
        height: 300px;
        overflow-y: scroll;
    }
    
    .btn-lime {
        color: #fff;
        background-color: #14ae5c;
        border-color: #14ae5c;
    }
    .btn-lime:hover {
        color: #fff;
        background-color: #198754;
        border-color: #198754;
    }
    .btn-purple {
        color: #fff;
        background-color: #8146f6;
        border-color: #8146f6;
    }
    .btn-purple:hover {
        color: #fff;
        background-color: #5830a9;
        border-color: #5830a9;
    }
    .btn-yellow {
        color: #fff;
        background-color: #ffe046;
        border-color: #ffe046;
    }
    .btn-yellow:hover {
        color: #fff;
        background-color: #b29c30;
        border-color: #b29c30;
    }
</style>
<body>
    <div class="d-flex justify-content-center align-items-center">
        <!--Formulario de envio de correos-->
        <form id="formulario">
            <!--Card para contener los elementos del formulario-->
            <div class="card mb-3 shadow  mb-5 bg-body text-secondary fw-bold"
                style="width: 41rem; border-radius: 1rem;">

                <!--Encabezado de la card-->
                <div class="card-header text-center">
                    <h2 class="card-title fw-bold py-2">ENVIO DE CORREOS</h4>
                </div>

                <!--Contenido del cuerpo de la card-->
                <div class="card-body">

                    <!--Fila para ingresar los correos a agregar-->
                    <div class="row">
                        <div class="col">
                            <div class="input-group mb-2">

                                <!--Boton para limpiar el contenido del campo de texto-->
                                <button type="button" onclick="limpiarCampoCorreo()" class="btn btn-yellow"
                                    title="Limpiar campo de correo"><i
                                        class="fas fa-eraser text-white fs-3"></i></button>
                                <input type="email" id="correo" name="correo" class="form-control form-control-lg"
                                    placeholder="correo@ejemplo.com" required title="Agrega un correo">
                                <input type="file" id="fileInput" class="form-control" accept=".csv"
                                    style="display: none;">
                                <!--Boton para importar documento CSV con los correos-->
                                <button type="button" onclick="document.getElementById('fileInput').click()" class="btn btn-dark" title="Importar archivo .csv">
                                    <i class="fas fa-file-import text-white fs-3"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!--Fila que contiene los botones de Agregar y Enviar-->
                    <div class="row mt-3">
                        <div class="col">
                            <button type="button" class="btn btn-purple w-100 fs-4 fw-bold" onclick="agregarCorreo()"
                                title="Agregar correo a la lista">Agregar</button>
                        </div>
                        <div class="col">
                            <button type="button" class="btn btn-lime w-100 fs-4 fw-bold"
                                onclick="confirmarEnvioCorreos()" title="Enviar correos añadidos">Enviar</button>
                        </div>
                    </div>

                    <!--Fila para la tabla y el input de Buscar-->
                    <div class="row mt-4">
                        <table class="table table-dark mb-0">
                            <thead>
                                <tr>
                                    <th class="text-center fs-4">CORREOS AÑADIDOS</th>
                                    <th class="text-center fs-4">ELIMINAR</th>
                                </tr>
                            </thead>
                        </table>
                        <input type="text" class="form-control form-control-lg mt-1 mb-1" id="txtbusquedacorreo" placeholder="Buscar...">
                        <div class="col" id="tabla-container">
                            <table class="table table-dark" id="tabla">
                                <tbody class="text-center table-light" id="cuerpoTabla">
                                </tbody>
                            </table>
                        </div>
                        <div id="contenidoArreglo" class="mt-4">
                        </div>
                    </div>
                </div>

            </div>
            </from>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/js/all.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

<!--Codigo JavaScript para el funcionamiento del formulario-->
<script>
    var correoArray = [];

    function validarCorreo(correo) {
        var regexCorreo = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return regexCorreo.test(correo);
    }

    function limpiarCampoCorreo() {
        document.getElementById("correo").value = "";
    }

    function agregarCorreo() {
        var correo = document.getElementById("correo").value;

        if (!validarCorreo(correo)) {
            alert("Por favor, ingrese un correo electrónico válido.");
            return;
        }

        if (correoArray.includes(correo)) {
            alert("El correo electrónico ya está en la tabla.");
            return;
        }

        var fila = document.createElement("tr");
        var celdaCorreo = document.createElement("td");
        celdaCorreo.textContent = correo;
        fila.appendChild(celdaCorreo);

        var celdaEliminar = document.createElement("td");
        var botonEliminar = document.createElement("button");
        botonEliminar.innerHTML = '<i class="fas fa-trash"></i>';
        botonEliminar.classList.add("btn", "btn-danger");
        botonEliminar.onclick = function () {
            fila.remove();
            correoArray = correoArray.filter(c => c !== correo);
            mostrarContenidoArreglo();
        };
        celdaEliminar.appendChild(botonEliminar);
        fila.appendChild(celdaEliminar);

        document.getElementById("cuerpoTabla").appendChild(fila);

        correoArray.push(correo);

        document.getElementById("correo").value = "";

        mostrarContenidoArreglo();
    }

    document.getElementById("fileInput").addEventListener("change", function (event) {
        var reader = new FileReader();
        reader.onload = function (event) {
            var contenido = event.target.result;
            var lineas = contenido.split(/\r?\n/);
            for (var i = 0; i < lineas.length; i++) {
                var correo = lineas[i].trim();
                if (validarCorreo(correo) && !correoArray.includes(correo)) {
                    agregarCorreoTabla(correo);
                }
            }
            mostrarContenidoArreglo();
        };
        reader.readAsText(event.target.files[0]);
    });

    function agregarCorreoTabla(correo) {
        var fila = document.createElement("tr");
        var celdaCorreo = document.createElement("td");
        celdaCorreo.textContent = correo;
        fila.appendChild(celdaCorreo);

        var celdaEliminar = document.createElement("td");
        var botonEliminar = document.createElement("button");
        botonEliminar.innerHTML = '<i class="fas fa-trash"></i>';
        botonEliminar.classList.add("btn", "btn-danger");
        botonEliminar.onclick = function () {
            fila.remove();
            correoArray = correoArray.filter(c => c !== correo);
            mostrarContenidoArreglo();
        };
        celdaEliminar.appendChild(botonEliminar);
        fila.appendChild(celdaEliminar);

        document.getElementById("cuerpoTabla").appendChild(fila);

        correoArray.push(correo);

        mostrarContenidoArreglo();
    }

    function enviarCorreos() {
        if (correoArray.length === 0) {
            alert("No hay correos electrónicos para enviar.");
            return;
        }

        correoArray.forEach(function (correo) {
            console.log("Enviando correo a:", correo, "con el mensaje: Hola");
        });

        alert("Correos electrónicos enviados con éxito.");

        document.getElementById("cuerpoTabla").innerHTML = "";
        correoArray = [];

        mostrarContenidoArreglo();
    }

    function mostrarContenidoArreglo() {
        var contenidoArreglo = correoArray.join(", ");
        document.getElementById("contenidoArreglo").textContent = "Contenido del arreglo: " + contenidoArreglo;
    }

    function confirmarEnvioCorreos() {
        if (confirm("¿Está seguro de enviar los correos electrónicos?")) {
            enviarCorreos();
        }
    }
    document.getElementById('txtbusquedacorreo').addEventListener('input', function(e) {
            var searchValue = e.target.value.toLowerCase();
            var table = document.getElementById('tabla');
            var rows = table.getElementsByTagName('tr');

            Array.from(rows).forEach(function(row) {
                var cells = row.getElementsByTagName('td');
                var found = false;
                Array.from(cells).forEach(function(cell) {
                    var cellValue = cell.textContent.toLowerCase();
                    if (cellValue.includes(searchValue)) {
                        found = true;
                    }
                });
                if (found) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });
</script>
</html>