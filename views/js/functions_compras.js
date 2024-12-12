//listar productos en Productos.php tabla
async function listar_compras(){
    try {
        let respuesta = await fetch(base_url+'controller/compras.php?tipo=listar');
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
                <td>${item.producto.Nombre}</td>
                <td>${item.usuario.RazonSocial}</td>      
                <td>${item.Cantidad}</td>
                <td>${item.Precio}</td>
                <td>${item.FechaCompra}</td>
                <td>${item.options}</td>
                `;
                document.querySelector('#tbody_compras').appendChild(nuevaFila);
        });
        }
        console.log(json);
    } catch(e) {
        console.log("OOps salio un error" + e);
    }
}
if (document.querySelector('#tabla_compras')) {
    listar_compras();
}

async function  ver_compra(id) {
    const datos = new FormData();
    datos.append('id_compra', id);
    try {
        let respuesta = await fetch(base_url+'controller/compras.php?tipo=ver',{
            method : 'POST',
            mode: 'cors',
            cache:'no-cache',
            body: datos
        });
        json = await respuesta.json();
        if (json.status) {
            document.getElementById('idproducto').value = json.contenido.IdProducto;
            document.querySelector('#idtrabajador').value= json.contenido.IdTrabajador;
            document.querySelector('#cantidad').value= json.contenido.Cantidad;
            document.querySelector('#precio').value= json.contenido.Precio;

        }else{
            window.location(base_url+"compras");
        }


        console.log(json);
    } catch (error) {
        
    }
}



async function editarCompra(id){
    let idProducto = document.getElementById('idproducto').value;
    let idtrabajador = document.querySelector('#idtrabajador').value;
    let cantidad = document.querySelector('#cantidad').value;
    let precio = document.querySelector('#precio').value;
    
    if (idProducto == "" || idtrabajador == "" || cantidad == ""|| precio == "") {
       alert("Error , campos vacios")  ;
       return;
    }
try {
   // capturamos datos del formulario html(nuevoproducto.php)
   const datos = new FormData(form_edit_compra);
   datos.append('id_compra', id);
   // Enviar datos hacia el controlador
   let Respuesta = await fetch(base_url+'controller/compras.php?tipo=Actualizar',{
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



//REGISTRAR COMPRAS
async function registrarCompra(){
    let idProducto = document.getElementById('idproducto').value;
    let idtrabajador = document.querySelector('#idtrabajador').value;
    let cantidad = document.querySelector('#cantidad').value;
    let precio = document.querySelector('#precio').value;
    
    if (idProducto == "" || idtrabajador == "" || cantidad == ""|| precio == "") {
       alert("Error , campos vacios")  ;
       return;
    }
try {
   // capturamos datos del formulario html(nuevoproducto.php)
   const datos = new FormData(form_compra);
   // Enviar datos hacia el controlador
   let Respuesta = await fetch(base_url+'controller/compras.php?tipo=registrar',{
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



//listar categorias
async function listar_productos(){
    try {
        let respuesta = await fetch(base_url+'controller/Producto.php?tipo=listar');
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
            document.getElementById('idproducto').innerHTML = contenido_select;
        }
    } catch (e) {
        console.log("Error al cargar categoria" + e);
    }
}


//listar proveedores
async function listar_trabajador(){
    try {
        let respuesta1 = await fetch(base_url+'controller/Usuario.php?tipo=listarTrabajadores');
        json = await respuesta1.json();
        if (json.status) {
            let datos1 = json.contenido;
            let contenido_select1 = '<option value="">Seleccionar</option>';
            datos1.forEach(element => {
                contenido_select1 += '<option value="'+element.Id+'">'+element.RazonSocial+'</option>';
             /* $('#idCategoria').append($('<option/>',{
                  text: `${element.Nombre}`,
                  value: `${element.Id}`,
                }));    */
            });
            document.getElementById('idtrabajador').innerHTML = contenido_select1;
        }
    } catch (e) {
        console.log("Error al cargar categoria" + e);
    }
}
