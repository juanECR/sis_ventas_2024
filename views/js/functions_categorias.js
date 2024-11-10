
//REGISTRAR categoria
async function registrarCategoria(){
    let nombre = document.querySelector('#nombre').value;
    let detalle = document.querySelector('#detalle').value;

    if ( nombre == "" || detalle == "") {
       alert("Error , campos vacios")  ;
       return;
    }
try {
   // capturamos datos del formulario html(nuevaCategoria.php)
   const datos = new FormData(form_categoria);
   // Enviar datos hacia el controlador
   let Respuesta = await fetch(base_url+'controller/Categoria.php?tipo=registrar',{
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