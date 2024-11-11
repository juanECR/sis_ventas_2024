<div class="container-fluid p-0" style="margin-top: 70px;height:550px">
        <h2 class="mb-4 text-center bg-success">Registrar Nueva Compra</h2>
        <form id= "form_compra" class="w-25 m-auto my-5" method="POST">

                 <label for="idproducto" class="form-label">Producto</label>
                <select  name="idproducto" id="idproducto" class="form-control" required>
                    <option value="">seleccionar</option>
                </select>

                <label for="idtrabajador" class="form-label">Trabajador</label>
                <select name="idtrabajador" id="idtrabajador" class="form-control" required>
                    <option value="">seleccionar</option>
                </select>

                <label for="cantidad" class="form-label">Cantidad</label>
                <input type="number" class="form-control" id="cantidad" name="cantidad" maxlength="50" required>

                <label for="precio" class="form-label">Precio</label>
                <input type="number" class="form-control" id="precio" name="precio" step="0.1" required>

            <button type="button" class="btn btn-success w-100 my-5" onclick="registrarCompra();">Registrar</button>
        </form>
    </div>
    <script src="<?php echo BASE_URL; ?>views/js/functions_compras.js"></script>
    <script>listar_productos();</script>
    <script>listar_trabajador();</script>