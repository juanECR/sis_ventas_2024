<div class="container-fluid py-5" style="background-color: #f8f9fa;margin-top:70px">
    <div class="container">
        <div class="card shadow-lg border-0 rounded-lg">
            <div class="card-header bg-success text-white text-center py-4">
                <h3 class="mb-0"><i class="fas fa-user-plus me-2"></i>Editar Usuario</h3>
            </div>
            <div class="card-body p-4">
                <form id="form_edit_usuario" class="needs-validation" novalidate>
                    <div class="row g-4">
                        <!-- Información Personal -->
                        <div class="col-md-6">
                            <div class="card h-100 border-0 bg-light">
                                <div class="card-body">
                                    <h5 class="card-title mb-4 text-success">
                                        <i class="fas fa-user me-2"></i>Información Personal
                                    </h5>
                                    <div class="mb-3">
                                        <label for="Nro_identidad" class="form-label">N° identidad</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                                            <input type="number" class="form-control" id="Nro_identidad" name="Nro_identidad" required>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="razon_social" class="form-label">Razón social</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fas fa-building"></i></span>
                                            <input type="text" class="form-control" id="razon_social" name="razon_social" required>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="telefono" class="form-label">Teléfono</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                            <input type="text" class="form-control" id="telefono" name="telefono" required>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="correo" class="form-label">Correo Electrónico</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                            <input type="email" class="form-control" id="correo" name="correo" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Ubicación -->
                        <div class="col-md-6">
                            <div class="card h-100 border-0 bg-light">
                                <div class="card-body">
                                    <h5 class="card-title mb-4 text-success">
                                        <i class="fas fa-map-marker-alt me-2"></i>Ubicación
                                    </h5>
                                    <div class="mb-3">
                                        <label for="departamento" class="form-label">Departamento</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fas fa-map"></i></span>
                                            <input type="text" class="form-control" id="departamento" name="departamento" required>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="provincia" class="form-label">Provincia</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fas fa-city"></i></span>
                                            <input type="text" class="form-control" name="provincia" id="provincia" required>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="distrito" class="form-label">Distrito</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fas fa-building"></i></span>
                                            <input type="text" class="form-control" name="distrito" id="distrito" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="cod_postal" class="form-label">Código Postal</label>
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="fas fa-mail-bulk"></i></span>
                                                <input type="number" class="form-control" name="cod_postal" id="cod_postal" maxlength="5" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="direccion" class="form-label">Dirección</label>
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="fas fa-home"></i></span>
                                                <input type="text" class="form-control" name="direccion" id="direccion" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Acceso -->
                        <div class="col-12">
                            <div class="card border-0 bg-light">
                                <div class="card-body">
                                    <h5 class="card-title mb-4 text-success">
                                        <i class="fas fa-lock me-2"></i>Información de Acceso
                                    </h5>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="rol" class="form-label">Rol</label>
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="fas fa-user-tag"></i></span>
                                                <select name="rol" id="rol" class="form-select" required>
                                                    <option value="">Seleccione un rol</option>
                                                    <option value="administrador">Administrador</option>
                                                    <option value="proveedor">Proveedor</option>
                                                    <option value="trabajador">Trabajador</option>
                                                </select>
                                            </div>
                                        </div>
                                       <div class="col-md-6 mb-3">
                                            <label for="estado" class="form-label">Estado</label>
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="fas fa-user-tag"></i></span>
                                                <select name="estado" id="estado" class="form-select" required>
                                                    <option value="1">activo</option>
                                                    <option value="0">inactivo</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-center mt-4">
                        <button type="button" class="btn btn-success btn-lg px-5" onclick="actualizarUsuario(id_p);">
                            <i class="fas fa-save me-2"></i>Actualizar Usuario
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo BASE_URL; ?>views/js/functions_usuario.js"></script>

<script>
     //http://localhost/sis_ventas_2024/editarProducto/1
     const id_p = <?php $pagina = explode("/",$_GET['views']); echo $pagina['1'];?>;
     ver_usuario(id_p);
</script>


<style>
    .card {
        transition: transform 0.2s;
    }
    .card:hover {
        transform: translateY(-5px);
    }
    .form-control:focus, .form-select:focus {
        border-color: #198754;
        box-shadow: 0 0 0 0.25rem rgba(25, 135, 84, 0.25);
    }
    .input-group-text {
        background-color: #198754;
        color: white;
        border: none;
    }
</style>
 