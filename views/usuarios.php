<div class="container" style="margin-top: 68px;min-height: 500px;">
    <h1>Lista general de usuarios</h1>
        <div class="row">
            <div class="col-12">
                <table id="tabla_usuarios" class="table table-striped table-bordered table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>Nro</th>
                            <th>N° IDENTIDAD</th>
                            <th>RAZON SOCIAL</th>
                            <th>TELEFONO</th>
                            <th>CORREO</th>
                            <th>DEPARTAMENTO</th>
                            <th>PROVICNIA</th>
                            <th>DISTRITO</th>
                            <th>COD_POSTAL</th>
                            <th>DIRECCION</th>
                            <th>ROL</th>
                            <th>ESTADO</th>
                            <th>F_REGISTRO</th>
                            <th class="acciones">Acciones</th>
                        </tr>
                    </thead>
                    <tbody id="tbody_usuario">
                        <!-- Aquí se agregarán las filas de la tabla -->
                    </tbody>
                </table>

                <h2 class="mt-5">Lista de Proveedores</h2>
                <table id="tabla_proveedores" class="table table-striped table-bordered table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>Nro</th>
                            <th>N° IDENTIDAD</th>
                            <th>RAZON SOCIAL</th>
                            <th>TELEFONO</th>
                            <th>CORREO</th>
                            <th>DEPARTAMENTO</th>
                            <th>PROVICNIA</th>
                            <th>DISTRITO</th>
                            <th>COD_POSTAL</th>
                            <th>DIRECCION</th>
                            <th>ROL</th>
                            <th>ESTADO</th>
                            <th>F_REGISTRO</th>
                            <th class="acciones">Acciones</th>
                        </tr>
                    </thead>
                    <tbody id="tbody_proveedores">
                        <!-- Aquí se agregarán las filas de la tabla -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <style>
        .container {
            margin-top: 70px;
        }
        .table th, .table td {
            vertical-align: middle;
        }
        .table thead th {
            color: #fff;
            background-color: #343a40;
        }
        .table tbody tr:hover {
            background-color: #f8f9fa;
        }
        .acciones i {
            margin-right: 5px;
            cursor: pointer;
        }
    </style>
<script src="<?php echo BASE_URL;?>views/js/functions_usuario.js"></script>

<script>
        $(document).ready(function () {
            $('#tabla_usuarios').DataTable({
                language: {
                    processing: "Tratamiento en curso...",
                    search: "Buscar&nbsp;:",
                    lengthMenu: "Agrupar de _MENU_ items",
                    info: "Mostrando del item _START_ al _END_ de un total de _TOTAL_ items",
                    infoEmpty: "No existen datos.",
                    infoFiltered: "(filtrado de _MAX_ elementos en total)",
                    infoPostFix: "",
                    loadingRecords: "Cargando...",
                    zeroRecords: "No se encontraron datos con tu busqueda",
                    emptyTable: "No hay datos disponibles en la tabla.",
                    paginate: {
                        first: "Primero",
                        previous: "<",
                        next: ">",
                        last: "Ultimo"
                    },
                    aria: {
                        sortAscending: ": active para ordenar la columna en orden ascendente",
                        sortDescending: ": active para ordenar la columna en orden descendente"
                    }
                },
                scrollY: 400,
                lengthMenu: [ [10, 25, -1], [10, 25, "All"] ],
            });
        });
        //tabla proovedpores
        $(document).ready(function () {
            $('#tabla_proveedores').DataTable({
                language: {
                    processing: "Tratamiento en curso...",
                    search: "Buscar&nbsp;:",
                    lengthMenu: "Agrupar de _MENU_ items",
                    info: "Mostrando del item _START_ al _END_ de un total de _TOTAL_ items",
                    infoEmpty: "No existen datos.",
                    infoFiltered: "(filtrado de _MAX_ elementos en total)",
                    infoPostFix: "",
                    loadingRecords: "Cargando...",
                    zeroRecords: "No se encontraron datos con tu busqueda",
                    emptyTable: "No hay datos disponibles en la tabla.",
                    paginate: {
                        first: "Primero",
                        previous: "<",
                        next: ">",
                        last: "Ultimo"
                    },
                    aria: {
                        sortAscending: ": active para ordenar la columna en orden ascendente",
                        sortDescending: ": active para ordenar la columna en orden descendente"
                    }
                },
                scrollY: 400,
                lengthMenu: [ [10, 25, -1], [10, 25, "All"] ],
            });
        });
    </script>