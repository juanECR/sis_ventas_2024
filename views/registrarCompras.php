<div class="container" style="margin-top:70px;height:550px">
  <div class="row justify-content-center">
    <div class="col-md-8 col-lg-6 mt-5" >
      <div class="card shadow">
        <div class="card-header bg-success text-white">
          <h2 class="mb-0">Registrar Nueva Compra</h2>
        </div>
        <div class="card-body">
          <form id="form_compra" method="POST">
            <div class="mb-3">
              <label for="idproducto" class="form-label">Producto</label>
              <select name="idproducto" id="idproducto" class="form-select" required>
                <option value="">Select</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="idtrabajador" class="form-label">Empleado</label>
              <select name="idtrabajador" id="idtrabajador" class="form-select" required>
                <option value="">Select</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="cantidad" class="form-label">Cantidad</label>
              <input type="number" class="form-control" id="cantidad" name="cantidad" maxlength="50" required>
            </div>
            <div class="mb-3">
              <label for="precio" class="form-label">Precio</label>
              <input type="number" class="form-control" id="precio" name="precio" step="0.1" required>
            </div>
            <div class="d-grid">
              <button type="button" class="btn btn-success" onclick="registrarCompra();">
                <i class="fas fa-check-circle me-2"></i>
                Register
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
    <script src="<?php echo BASE_URL; ?>views/js/functions_compras.js"></script>
    <script>listar_productos();</script>
    <script>listar_trabajador();</script>