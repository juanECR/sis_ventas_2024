<div class="container-fluid py-5" style="background-color: #f8f9fa; min-height: 100vh;margin-top: 70px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-lg border-0 rounded-lg">
                    <!-- Header de la card -->
                    <div class="card-header bg-success text-white text-center py-4">
                        <h3 class="mb-0">
                            <i class="fas fa-tags me-2"></i>
                            Actualizar Nueva Categoría
                        </h3>
                    </div>

                    <!-- Cuerpo de la card -->
                    <div class="card-body p-4">
                        <div class="text-center mb-4">
                            <div class="feature-icon bg-success bg-gradient text-white rounded-circle mb-3">
                                <i class="fas fa-folder-plus fa-2x p-3"></i>
                            </div>
                            <p class="text-muted">Complete el formulario para registrar una nueva categoría</p>
                        </div>

                        <form id="form_edit_categoria" class="needs-validation" novalidate>
                            <!-- Campo Nombre -->
                            <div class="mb-4">
                                <label for="nombre" class="form-label fw-bold">
                                    <i class="fas fa-tag me-2"></i>Nombre
                                </label>
                                <div class="input-group">
                                    <span class="input-group-text bg-success text-white">
                                        <i class="fas fa-bookmark"></i>
                                    </span>
                                    <input type="text" 
                                           class="form-control form-control-lg" 
                                           id="nombre" 
                                           name="nombre" 
                                           maxlength="50" 
                                           required
                                           placeholder="Nombre de la categoría">
                                    <div class="invalid-feedback">
                                        Por favor, ingrese un nombre para la categoría.
                                    </div>
                                </div>
                                <small class="text-muted">Máximo 50 caracteres</small>
                            </div>

                            <!-- Campo Detalle -->
                            <div class="mb-4">
                                <label for="detalle" class="form-label fw-bold">
                                    <i class="fas fa-align-left me-2"></i>Detalle
                                </label>
                                <div class="input-group">
                                    <span class="input-group-text bg-success text-white">
                                        <i class="fas fa-info-circle"></i>
                                    </span>
                                    <textarea class="form-control form-control-lg" 
                                              id="detalle" 
                                              name="detalle" 
                                              rows="3"
                                              placeholder="Descripción de la categoría"></textarea>
                                </div>
                                <small class="text-muted">Agregue una descripción detallada (opcional)</small>
                            </div>

                            <!-- Botón de Registro -->
                            <div class="d-grid gap-2 mt-5">
                                <button type="button" 
                                        class="btn btn-success btn-lg py-3 shadow-sm" 
                                        onclick="ActualizarCategoria(id_p);">
                                    <i class="fas fa-save me-2"></i>
                                    Registrar Categoría
                                </button>
                            </div>
                        </form>
                    </div>

                    <!-- Footer de la card -->
                    <div class="card-footer text-center py-3">
                        <div class="small text-muted">
                            <i class="fas fa-info-circle me-1"></i>
                            Los campos marcados son obligatorios
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo BASE_URL; ?>views/js/functions_categorias.js"></script>
<script>
     //http://localhost/sis_ventas_2024/editarProducto/1
     const id_p = <?php $pagina = explode("/",$_GET['views']); echo $pagina['1'];?>;
     ver_categoria(id_p);
</script>

