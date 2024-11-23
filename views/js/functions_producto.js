//listar productos en Productos.php tabla
async function listar_productos(){
    try {
        let respuesta = await fetch(base_url+'controller/Producto.php?tipo=listar');
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
                <td>${item.Codigo}</td>
                <td>${item.Nombre}</td>
                <td>${item.Precio}</td>
                <td>${item.Stock}</td>
                <td>${item.categoria.Nombre}</td>
                <td>${item.FechaVencimiento}</td>
                <td>${item.proveedor.RazonSocial}</td>
                <td>${item.options}</td>
                `;
                document.querySelector('#tbody_producto').appendChild(nuevaFila);
        });
        }
        console.log(json);
    } catch(e) {
        console.log("OOps salio un error" + e);
    }
}






if (document.querySelector('#tabla_productos')) {
    listar_productos();
}


//REGISTRAR PRODUCTOS
async function registrarProducto(){

    let codigo = document.getElementById('codigo').value;
    let nombre = document.querySelector('#nombre').value;
    let detalle = document.querySelector('#detalle').value;
    let precio = document.querySelector('#precio').value;
    let stock = document.querySelector('#stock').value;
    let idCategoria = document.querySelector('#idCategoria').value;
    let fechaVencimiento = document.querySelector('#fechaVencimiento').value;
    let imagen = document.querySelector('#imagen').value;
    let idProveedor =document.querySelector('#idProveedor').value;
    
    if (codigo == "" || nombre == "" || detalle == ""|| precio == ""|| stock == ""|| idCategoria == ""|| fechaVencimiento == ""|| imagen == ""|| idProveedor == "") {
       alert("Error , campos vacios")  ;
       return;
    }
try {
   // capturamos datos del formulario html(nuevoproducto.php)
   const datos = new FormData(formProducto);
   // Enviar datos hacia el controlador
   let Respuesta2 = await fetch(base_url+'controller/Producto.php?tipo=registrar',{
       method: 'POST',
       mode: 'cors',
       cache: 'no-cache',
       body: datos
   });
   // capturamos la respuesta par / convertido a la variable json
   json = await Respuesta2.json();
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


//listar categorias
async function listar_categorias() {
    try {
        let respuesta = await fetch(base_url+'controller/Categoria.php?tipo=listar');
        json = await respuesta.json();
        if (json.status) {
            let datos = json.contenido;
            let contenido_select = '<option value="">Seleccionar</option>';
            datos.forEach(element => {
                contenido_select += '<option value="'+ element.Id +'">'+ element.Nombre+'</option>';
             /* $('#idCategoria').append($('<option/>',{
                  text: `${element.Nombre}`,
                  value: `${element.Id}`,
                }));    */
            });
            document.getElementById('idCategoria').innerHTML = contenido_select;
        }


    } catch (e) {
        console.log("Error al cargar categoria" + e);
    }
}


//listar proveedores
async function listar_proveedores() {
    try {
        let respuesta1 = await fetch(base_url+'controller/Usuario.php?tipo=listarProveedores');
        json = await respuesta1.json();
        if (json.status) {
            let datos1 = json.contenido;
            let contenido_select1 = '<option value="">Seleccionar</option>';
            datos1.forEach(element => {
                contenido_select1 += '<option value="'+ element.Id +'">'+ element.RazonSocial+'</option>';
             /* $('#idCategoria').append($('<option/>',{
                  text: `${element.Nombre}`,
                  value: `${element.Id}`,
                }));    */
            });
            document.getElementById('idProveedor').innerHTML = contenido_select1;
        }

 
    } catch (e) {
        console.log("Error al cargar categoria" + e);
    }
}



