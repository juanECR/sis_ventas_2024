<div class="container-fluid p-0" style="margin-top: 70px;">
        <h2 class="mb-4 text-center bg-success">Registrar Nuevo Usuario</h2>
        <form id= "form_usuario" class="w-25 m-auto my-5">

                <label for="Nro_identidad" class="form-label">N° identidad</label>
                <input type="number" class="form-control" id="Nro_identidad" name="Nro_identidad"  required>

                <label for="razon_social" class="form-label">Razon social</label>
                <input type="text" class="form-control" id="razon_social" name="razon_social"  required>

                <label for="telefono" class="form-label">Telefono</label>
                <input type="text" class="form-control" id="telefono" name="telefono" required >

                <label for="correo" class="form-label">Correo Electronico</label>
                <input type="email" class="form-control" id="correo" name="correo" required>

                <label for="departamento" class="form-label">Departamento</label>
                <input type="text" class="form-control" id="departamento" name="departamento"  required>
 
                <label for="provincia" class="form-label">Provincia</label>
                <input type="text"  class="form-control" name="provincia" id="provincia"  required>
 
                <label for="distrito" class="form-label">Distrito</label>
                <input type="text"  class="form-control" name="distrito" id="distrito"  required>
 
                <label for="cod_postal" class="form-label">Codigo Postal</label>
                <input type="number"  class="form-control" name="cod_postal" id="cod_postal" maxlength="5" required>

                <label for="direccion" class="form-label">Direccion</label>
                <input type="text"  class="form-control" name="direccion" id="direccion"  required>

                <label for="rol" class="form-label">Rol</label>
                <select name="rol" id="rol" class="form-control" required>
                     <option value="administrador">administrador</option>
                     <option value="proveedor">proveedor</option>
                     <option value="trabajador">trabajador</option>
                </select>

                <label for="clave" class="form-label">Clave</label>
                <input type="password"  class="form-control" name="clave" id="clave"  required>

            <button type="button" class="btn btn-success col-6 mx-2" onclick="registrarUsuario();">Registrar</button>
        </form>
    </div>
    <script src="<?php echo BASE_URL; ?>views/js/functions_usuario.js"></script>