
<div class="container " style="background-color: #f8f9fa;margin-top:70px">
    <div class="row ">
        <!-- Advanced Panel -->
         <h1 class="text-center mt-5">Panel de administracion</h1>
        <div class="col-md-4">
            <div class="card mb-3">
                <div class="card-header">Usuario</div>
                <div class="card-body">
                    <a href="<?php BASE_URL;?>nuevoUsuario"><div class="icon-wrapper"><i class="fa fa-user-plus"></i> Registrar Usuario</div></a>
                    <a href=""><div class="icon-wrapper"><i class="fas fa-users"></i> Ver usuarios</div></a>
                    <a href=""><div class="icon-wrapper"><i class="fas fa-question-circle"></i> FAQs</div></a>
                </div>
            </div>
        </div>

        <!-- Database Management Panel -->
        <div class="col-md-4">
            <div class="card mb-3">
                <div class="card-header">Proveedores</div>
                <div class="card-body">
                    <a href=""><div class="icon-wrapper"><i class="fas fa-users"></i> Ver Provedores</div></a>
                    <a href=""><div class="icon-wrapper"><i class="fas fa-question-circle"></i> FAQs</div></a>
                </div>
            </div>
        </div>

        <!-- Domain Management Panel -->
        <div class="col-md-4">
            <div class="card mb-3">
                <div class="card-header">Trabajadores</div>
                <div class="card-body">
                    <a href=""><div class="icon-wrapper"><i class="fas fa-users"></i> Ver Trabajadores</div></a>
                    <a href=""><div class="icon-wrapper"><i class="fas fa-question-circle"></i> FAQs</div></a>
                </div>
            </div>
        </div>

        <!-- Mail Panel -->
        <div class="col-md-4">
            <div class="card mb-3">
                <div class="card-header">Productos</div>
                <div class="card-body">
                    <a href="<?php BASE_URL;?>nuevoProducto"><div class="icon-wrapper"><i class="fa fa-user-plus"></i> Registrar Producto</div></a>
                    <a href=""><div class="icon-wrapper"><i class="fas fa-users"></i> Ver Productos</div></a>
                    <a href=""><div class="icon-wrapper"><i class="fas fa-question-circle"></i> FAQs</div></a>
                </div>
            </div>
        </div>

        <!-- Reseller Panel -->
        <div class="col-md-4">
            <div class="card mb-3">
                <div class="card-header">Categorias</div>
                <div class="card-body">
                    <a href="<?php BASE_URL;?>nuevaCategoria"><div class="icon-wrapper"><i class="fa fa-user-plus"></i>Registrar Categoria</div></a>
                    <a href=""><div class="icon-wrapper"><i class="fas fa-users"></i> Ver Categorias</div></a>
                    <a href=""><div class="icon-wrapper"><i class="fas fa-question-circle"></i> FAQs</div></a>
                </div>
            </div>
        </div>

        <!-- File Management Panel -->
        <div class="col-md-4">
            <div class="card mb-3">
                <div class="card-header">Compras</div>
                <div class="card-body">
                    <a href="<?php BASE_URL;?>registrarCompras"><div class="icon-wrapper"><i class="fa fa-user-plus"></i>Registrar Compra</div></a>
                    <a href=""><div class="icon-wrapper"><i class="fas fa-users"></i> Ver Compras</div></a>
                    <a href=""><div class="icon-wrapper"><i class="fas fa-question-circle"></i> FAQs</div></a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
        .card-header {
            background-color: #333;
            color: #fff;
            font-weight: bold;
        }
        a{
            text-decoration: none;
            color: #333;
        }
    </style>