<div class="container-fluid p-0" style="margin-top: 70px;height:550px">
        <h2 class="mb-4 text-center bg-success">Registrar Nueva Categoria</h2>
        <form id= "form_categoria" class="w-25 m-auto my-5" method="POST">

                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" maxlength="50" required>

                <label for="detalle" class="form-label mt-3">Detalle</label>
                <input type="text" class="form-control" id="detalle" name="detalle">
            <button type="button" class="btn btn-success w-100 my-5" onclick="registrarCategoria();">Registrar</button>
        </form>
    </div>
    <script src="<?php echo BASE_URL; ?>views/js/functions_categorias.js"></script>