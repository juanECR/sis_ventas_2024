async function iniciar_sesion() {
    let usuario = document.querySelector('#usuario');
    let password = document.querySelector('#password');

    if (usuario == ""|| password == "") {
        alert("campos vacios");
        return;
    }
    try {
        // capturamos datos del formulario html(nuevoproducto.php)
        const datos = new FormData(frm_login);
        // Enviar datos hacia el controlador
        let Respuesta2 = await fetch(base_url+'controller/login.php?tipo=iniciar_sesion',{
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: datos
        });
        // capturamos la respuesta par / convertido a la variable json
        json = await Respuesta2.json();
        if (json.status) {
           /* swal("iniciar secion", json.mensaje,"success"); */
           location.replace(base_url+"inicio");
        }else{
           swal("iniciar secion", json.mensaje,"error");
        }
        console.log(json);
     } catch (e) {
         console.log("Oops, Ocurrio un error" + e);
     }
   
}

if (document.querySelector('#frm_login')){
    //evita que se envie el formulario
    let frm_login = document.querySelector('#frm_login');
    frm_login.onsubmit = function(e){
        e.preventDefault();
        iniciar_sesion();
    }
}

async function cerrar_sesion() {
    try{
     let respuesta = await fetch(base_url+"controller/login.php?tipo=cerrar_sesion",{
        method : 'POST',
        mode: 'cors',
        cache: 'no-cache'
     });
     json = await respuesta.json();
        if (json.status) {
           location.replace(base_url+"login");
        }
     }catch(error){
          console.log("Ocurrio un error"+error);
     }
}