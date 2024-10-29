
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
   // capturamos la respuesta par / convertido a la variable json
   json = await respuesta.json();
   if (json.status) {
      swal("Registro", json.mensaje,"success");
   }else{
      swal("Registro", json.mensaje,"error");
   }
   console.log(json);
} catch (e) {
    console.log("ups, Ocurrio un error" + e);
}
}




//listar categorias
async function listar_categorias() {
    try {
        let respuesta = await fetch(base_url+'controller/Categoria.php?tipo=listar');
        let json = await respuesta.json();
        if (json.status) {
            let datos = json.contenido;
            datos.forEach(element => {
                $('#categoria').append($('<option/>'),{
                  text: `${element.nombre}`,
                  text: `${element.id}`,

                });
            });
        }

        console.log(respuesta);
    } catch (e) {
        console.log("Error al cargar categoria" + e);
    }
}



