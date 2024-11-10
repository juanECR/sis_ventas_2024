<div class="container-fluid p-0" style="margin-top: 70px;height:550px">
        <h2 class="mb-4 text-center bg-success">Registrar Nueva Categoria</h2>
        <form id= "form_categoria" class="w-25 m-auto my-5">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" maxlength="30" required>
            </div>
            <div class="mb-3">
                <label for="detalle" class="form-label">Detalle</label>
                <textarea class="form-control" id="detalle" name="detalle" maxlength="100" rows="3"></textarea>
            </div>
            <button type="button" class="btn btn-success col-6 mx-2" onclick="registrarCategoria();">Registrar</button>
        </form>
    </div>
    <script src="<?php echo BASE_URL; ?>views/js/functions_categorias.js"></script>