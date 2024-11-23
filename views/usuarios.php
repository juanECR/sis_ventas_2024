<div class="container" style="margin-top: 68px;min-height: 500px;">
    <h1>Tabla de Usuarios</h1>
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