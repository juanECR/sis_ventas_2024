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


//-----------------ver usuario--------------------------------------
async function ver_usuario(id) {
    const formData = new FormData();
    formData.append('id_usuario' , id);
    try {
        let respuesta = await fetch(base_url+'controller/Usuario.php?tipo=ver',{
            method : 'POST',
            mode: 'cors',
            cache:'no-cache',
            body: formData
        });
        json = await respuesta.json();
        if (json.status) {
            document.querySelector('#Nro_identidad').value = json.contenido.Nro_identidad;
            document.querySelector('#razon_social').value = json.contenido.RazonSocial;
            document.querySelector('#telefono').value = json.contenido.Telefono;
            document.querySelector('#correo').value = json.contenido.Correo;
            document.querySelector('#departamento').value = json.contenido.Departamento;
            document.querySelector('#provincia').value = json.contenido.Provincia;
            document.querySelector('#distrito').value = json.contenido.Distrito;
            document.querySelector('#cod_postal').value = json.contenido.CodPostal;
            document.querySelector('#direccion').value = json.contenido.Direccion;
            document.querySelector('#rol').value = json.contenido.Rol;
            document.querySelector('#estado').value= json.contenido.Estado;

        }else{
            window.location(base_url+"usuarios");
        }

        console.log(json);
    } catch (e) {
        console.log("Oops ocurrio un error" + e);
    }
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



async function actualizarUsuario(id) {
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
    let estado         = document.querySelector('#estado').value;

    if ( Nro_identidad== "" ||RazonSocial== "" || Telefono	== ""|| Correo	== ""|| Departamento == ""||Provincia== "" ||Distrito== ""|| CodPostal== ""|| Direccion== ""||Rol== "" || estado == "" ) {
       alert("Error , campos vacios")  ;
       return;
    }
 try {
    // capturamos datos del formulario html(nuevoproducto.php)
    const datos = new FormData(form_edit_usuario);
    datos.append('id_usuario' , id);
    // Enviar datos hacia el controlador
    let Respuesta3 = await fetch(base_url+'controller/Usuario.php?tipo=Actulizar',{
        method: 'POST',
        mode: 'cors',
        cache: 'no-cache',
        body: datos
    });
    // capturamos la respuesta par / convertido a la variable json
    json = await Respuesta3.json();
    if (json.status) {
       swal("Actualizado", json.mensaje,"success");
    }else{
       swal("Actualizar", json.mensaje,"error");
    }
    console.log(json);
 } catch (e) {
     console.log("Oops, Ocurrio un error" + e);
 }
    
}


async function eliminarUsuario(id) {
    swal({
        title: '¿Desea eliminar usuario?',
        text:'',
        icon: "warning",
        button: true,
        dangerMode: true
    }).then((willDelete)=>{
        if (willDelete) {
            fnt_eliminar();  
        }
    })
}

async function fnt_eliminar(id) {
    const formData = new FormData();
    formData.append('id_usuario' , id);
    try {
        let respuesta = await fetch(base_url+'controller/Usuario.php?tipo=eliminar',{
            method : 'POST',
            mode: 'cors',
            cache:'no-cache',
            body: formData
        });
        json = await respuesta.json();
        if (json.status) {
            swal("Eliminado", json.mensaje,"success");
            const tr = document.querySelector('#fila'+id); //Accedemos al tr de cada boton
            tr.remove() //Eliminamos la fila
        }else{
            window.location(base_url+"Usuarios");
        }

        console.log(json);
    } catch (e) {
        console.log("Oops ocurrio un error" + e);
    }
}