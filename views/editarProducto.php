<div class="container py-5" style="margin-top: 70px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0">
                <div class="card-body p-5">
                    <!-- Header con icono -->
                    <div class="text-center mb-4">
                        <i class="bi bi-box-seam display-4 text-primary mb-3"></i>
                        <h2 class="card-title fw-bold">Editar Producto</h2>
                        <p class="text-muted">Complete los detalles del nuevo producto</p>
                    </div>

                    <form id="formEditProducto">
                        <div class="row g-4">
                            <!-- Código y Nombre -->
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="codigo" name="codigo" required>
                                    <label for="codigo" readonly>Código</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="nombre" name="nombre" maxlength="30" required>
                                    <label for="nombre">Nombre</label>
                                </div>
                            </div>

                            <!-- Detalle -->
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" id="detalle" name="detalle" maxlength="100" style="height: 100px"></textarea>
                                    <label for="detalle">Detalle</label>
                                </div>
                            </div>

                            <!-- Precio y Stock -->
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="number" class="form-control" id="precio" name="precio" step="0.01" required>
                                    <label for="precio">Precio</label>
                                </div>
                            </div>
<!--                             <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="number" class="form-control" id="stock" name="stock" min="0" max="99999" required>
                                    <label for="stock">Stock</label>
                                </div>
                            </div> -->

                            <!-- Categoría y Proveedor -->
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select class="form-select" name="idCategoria" id="idCategoria" required>
                                        <option value="">Seleccionar</option>
                                    </select>
                                    <label for="idCategoria">Categoría</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select class="form-select" name="idProveedor" id="idProveedor" required>
                                        <option value="">Seleccionar</option>
                                    </select>
                                    <label for="idProveedor">Proveedor</label>
                                </div>
                            </div>

                            <!-- Fecha de Vencimiento -->
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="date" class="form-control" id="fechaVencimiento" name="fechaVencimiento">
                                    <label for="fechaVencimiento">Fecha de Vencimiento</label>
                                </div>
                            </div>

                            <!-- Imagen -->
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="file" class="form-control" id="imagen" name="imagen" maxlength="20">
                                    <label for="imagen">Imagen</label>
                                </div>
                            </div>

                            <!-- Botón de registro -->
                            <div class="col-12 text-center mt-4">
                                <button type="button" class="btn btn-primary btn-lg px-5" onclick="registrarProducto();">
                                    <i class="bi bi-check2-circle me-2"></i>Registrar Producto
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo BASE_URL; ?>views/js/functions_producto.js"></script>
    <script>listar_categorias();</script>
    <script>listar_proveedores();</script>


    <script>
     //http://localhost/sis_ventas_2024/editarProducto/1
     const id_p = <?php $pagina = explode("/",$_GET['views']); echo $pagina['1'];?>;
     ver_producto(id_p);
    </script>