//LISTAR USUARIOS
async function listar_usuarios(){
    try {
        let respuesta = await fetch(base_url+'controller/Usuario.php?tipo=listar');
        let json = await respuesta.json();
        if (json.status) {
            let datos = json.contenido;
            let cont = 0;
     /*        let contenido_select = '<tbody> <tr><td>nombre</td><td>apelldio</td></tr></tbody>'; */
            datos.forEach(item => {
                let nuevaFila =  document.createElement("tr");
                //nuevaFilaid: es crear // item.Id: viene de la base de datos
                nuevaFila.id = "fila" +item.Id;
                cont ++;
                nuevaFila.innerHTML = `
                <td>${cont}</td>
                <td>${item.Nro_identidad}</td>
                <td>${item.RazonSocial}</td>
                <td>${item.Telefono}</td>
                <td>${item.Correo}</td>
                <td>${item.Departamento}</td>
                <td>${item.Provincia}</td>
                <td>${item.Distrito}</td>
                <td>${item.CodPostal}</td>
                <td>${item.Direccion}</td>
                <td>${item.Rol}</td>
                <td>${item.Estado}</td>
                <td>${item.FechaRegistro}</td>

                <td>${item.options}</td>
                `;
                document.querySelector('#tbody_usuario').appendChild(nuevaFila);
        });
        }
        console.log(json);
    } catch(e) {
        console.log("OOps salio un error" + e);
    }
}

if (document.querySelector('#tabla_usuarios')) {
    listar_usuarios();
}

//REGISTRAR USUARIO
async function registrarUsuario(){
    let Nro_identidad  = document.querySelector('#Nro_identidad').value;
	let RazonSocial    = document.querySelector('#razon_social').value;
	let Telefono	   = document.querySelector('#telefono').value;
	let Correo	       = document.querySelector('#correo').value;
	let Departamento   = document.querySelector('#departamento').value;
	let Provincia	   = document.querySelector('#provincia').value;
	let Distrito	   = document.querySelector('#distrito').value;
	let CodPostal	   = document.querySelector('#cod_postal').value;
	let Direccion	   = document.querySelector('#direccion').value;
	let Rol	           = document.querySelector('#rol').value;
	/* let Clave	       = document.querySelector('#clave').value; */
    if ( Nro_identidad== "" ||RazonSocial== "" || Telefono	== ""|| Correo	== ""|| Departamento == ""||Provincia== "" ||Distrito== ""|| CodPostal== ""|| Direccion== ""||Rol== "" /* || Clave== "" */ ) {
       alert("Error , campos vacios")  ;
       return;
    }
try {
   // capturamos datos del formulario html(nuevaCategoria.php)
   const datos = new FormData(form_usuario);
   // Enviar datos hacia el controlador
   let Respuesta = await fetch(base_url+'controller/Usuario.php?tipo=registrar',{
       method: 'POST',
       mode: 'cors',
       cache: 'no-cache',
       body: datos
   });
   // capturamos la respuesta par / convertido a la variable json
   json = await Respuesta.json();
   if (json.status) {
      swal("Registro", json.mensaje,"success");
   }else{
      swal("Registro", json.mensaje,"error");
   }

   console.log(json);
} catch (e) {
    console.log("Oops, Ocurrio un error" + e);
}
}



// -------------------PROVEEDORES-------------------------------------


//LISTAR PROVEEDORES
async function listar_proveedores(){
    try {
        let respuesta = await fetch(base_url+'controller/Usuario.php?tipo=listarProveedores');
        let json = await respuesta.json();
        if (json.status) {
            let datos = json.contenido;
            let cont = 0;
     /*        let contenido_select = '<tbody> <tr><td>nombre</td><td>apelldio</td></tr></tbody>'; */
            datos.forEach(item => {
                let nuevaFila =  document.createElement("tr");
                //nuevaFilaid: es crear // item.Id: viene de la base de datos
                nuevaFila.id = "fila" +item.Id;
                cont ++;
                nuevaFila.innerHTML = `
                <td>${cont}</td>
                <td>${item.Nro_identidad}</td>
                <td>${item.RazonSocial}</td>
                <td>${item.Telefono}</td>
                <td>${item.Correo}</td>
                <td>${item.Departamento}</td>
                <td>${item.Provincia}</td>
                <td>${item.Distrito}</td>
                <td>${item.CodPostal}</td>
                <td>${item.Direccion}</td>
                <td>${item.Rol}</td>
                <td>${item.Estado}</td>
                <td>${item.FechaRegistro}</td>

                <td>${item.options}</td>
                `;
                document.querySelector('#tbody_proveedores').appendChild(nuevaFila);
        });
        }
        console.log(json);
    } catch(e) {
        console.log("OOps salio un error" + e);
    }
}

if (document.querySelector('#tabla_proveedores')) {
    listar_proveedores();
}