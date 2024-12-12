//listar categorias en categorias.php tabla
async function listar_categorias(){
   try {
       let respuesta = await fetch(base_url+'controller/Categoria.php?tipo=listar');
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
               <td>${item.Nombre}</td>
               <td>${item.Detalle}</td>
               <td>${item.options}</td>
               `;
               document.querySelector('#tbody_categorias').appendChild(nuevaFila);
       });
       }
       console.log(json);
   } catch(e) {
       console.log("OOps salio un error" + e);
   }
}
if (document.querySelector('#tabla_categorias')) {
   listar_categorias();
}


async function ver_categoria(id) {
    const Data = new FormData();
    Data.append('id_categoria' , id);
    try {
        let respuesta = await fetch(base_url+'controller/Categoria.php?tipo=ver',{
            method : 'POST',
            mode: 'cors',
            cache:'no-cache',
            body: Data
        });
        json = await respuesta.json();
        if (json.status) {
            document.querySelector('#nombre').value = json.contenido.Nombre;
            document.querySelector('#detalle').value= json.contenido.Detalle;

        }else{
            window.location(base_url+"categorias");
        }
        console.log(json);
    } catch (e) {
        console.log("Oops ocurrio un error" + e);
    }
}


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
}


async function ActualizarCategoria(id){
    let nombre = document.querySelector('#nombre').value;
    let detalle = document.querySelector('#detalle').value;

    if ( nombre == "" || detalle == "") {
       alert("Error , campos vacios")  ;
       return;
    }
try {
   // capturamos datos del formulario html(nuevaCategoria.php)
   const datos = new FormData(form_edit_categoria);
   datos.append('id_categoria', id);
   // Enviar datos hacia el controlador
   let Respuesta = await fetch(base_url+'controller/Categoria.php?tipo=Actualizar',{
       method: 'POST',
       mode: 'cors',
       cache: 'no-cache',
       body: datos
   });
   // capturamos la respuesta par / convertido a la variable json
   json = await Respuesta.json();
   if (json.status) {
      swal("Actualizar", json.mensaje,"success");
   }else{
      swal("Actualizar", json.mensaje,"error");
   }

   console.log(json);
} catch (e) {
    console.log("Oops, Ocurrio un error" + e);
}
}


