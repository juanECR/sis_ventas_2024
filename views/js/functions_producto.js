
async function registrarProducto(){
    let codigo = document.getElementById('codigo').value;
    let nombre = document.querySelector('#nombre').value;
    let detalle = document.querySelector('#detalle').value;
    let precio = document.querySelector('#precio').value;
    let stock = document.querySelector('#stock').value;
    let idCategoria = document.querySelector('#idCategoria').value;
    let fechaVencimiento = document.querySelector('#fechaVencimiento').value;
    let imagen = document.querySelector('#imagen').value;
    let idProveedor = document.querySelector('#idProveedor').value;
    
    if (codigo == "" || nombre == "" || detalle == ""|| precio == ""|| stock == ""|| idCategoria == ""|| fechaVencimiento == ""|| imagen == ""|| idProveedor == "") {
       alert("Error , campos vacios")  ;
       return;
    }
try {
   // capturamos datos del formulario html(nuevo_producto.php)
   const datos = new FormData(frmRegistrar);
   // Enviar datos hacia el controlador
   let respuesta = await fetch(base_url+'controller/Producto.php?tipo=registrar',{
       method: 'POST',
       mode: 'cors',
       cache: 'no-cache',
       body: datos
   });
   console.log(respuesta);
} catch (e) {
    console.log("ups, Ocurrio un error" + e);
}
}
