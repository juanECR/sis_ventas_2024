    <div class="container-fluid p-0 " style="margin-top: 70px;">
        <h2 class="mb-4 text-center">Registrar Producto</h2>
        <form id= "formProducto" class="w-25 m-auto">

                <label for="codigo" class="form-label">Código</label>
                <input type="text" class="form-control" id="codigo" name="codigo"  required>

                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" maxlength="30" required>

                <label for="detalle" class="form-label">Detalle</label>
                <textarea class="form-control" id="detalle" name="detalle" maxlength="100" rows="3"></textarea>

                <label for="precio" class="form-label">Precio</label>
                <input type="number" class="form-control" id="precio" name="precio" step="0.01" required>

                <label for="stock" class="form-label">Stock</label>
                <input type="number" class="form-control" id="stock" name="stock" min="0" max="99999" required>

                <label for="idCategoria" class="form-label">Categoría</label>
                <select type="number" name="idCategoria" id="idCategoria" class="form-control" required>
                    <option value="">seleccionar</option>
                </select>

                <label for="fechaVencimiento" class="form-label">Fecha de Vencimiento</label>
                <input type="date" class="form-control" id="fechaVencimiento" name="fechaVencimiento">

                <label for="imagen" class="form-label">Imagen</label>
                <input type="file" class="form-control" id="imagen" name="imagen" maxlength="20">

                <label for="idProveedor" class="form-label">Proveedor</label>
                <select name="idProveedor" id="idProveedor" class="form-control" required>
                    <option value="">seleccionar</option>
                    
                </select>
            <button type="button" class="btn btn-success col-6 mx-2" onclick="registrarProducto();">Registrar</button>
        </form>
    </div>

    <script src="<?php echo BASE_URL; ?>views/js/functions_producto.js"></script>
    <script>listar_categorias();</script>
    <script>listar_proveedores();</script>