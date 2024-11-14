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
};