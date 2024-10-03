<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iniciar sesión</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background: rgb(145, 145, 145);
    }
  </style>
</head>
<body>
  <div class="modal modal-sheet position-static d-block  p-4 py-md-5" tabindex="-1" role="dialog" id="modalSignin">
    <div class="modal-dialog" role="document">
      <div class="modal-content rounded-4 shadow">
        <div class="modal-header p-5 pb-4 border-bottom-0">
          <h1 class="fw-bold mb-0 fs-2">Iniciar secion</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
  
        <div class="modal-body p-5 pt-0">
          <form class="" action="<?php BASE_URL?>inicio">
            <div class="form-floating mb-3">
              <input type="email" class="form-control rounded-3" id="floatingInput" placeholder="name@example.com">
              <label for="floatingInput">Correo electronico / usuario</label>
            </div>
            <div class="form-floating mb-3">
              <input type="password" class="form-control rounded-3" id="floatingPassword" placeholder="Password">
              <label for="floatingPassword">Contraseña</label>
            </div>
            <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">Iniciar secion</button>
         
            <hr class="my-4">
            <h2 class="fs-5 fw-bold mb-3">Usar otro</h2>
            <button class="w-100 py-2 mb-2 btn btn-outline-secondary rounded-3" type="submit">
              <svg class="bi me-1" width="16" height="16"><use xlink:href="#twitter"></use></svg>
            Iniciar secion con Twitter
            </button>
            <button class="w-100 py-2 mb-2 btn btn-outline-primary rounded-3" type="submit">
              <svg class="bi me-1" width="16" height="16"><use xlink:href="#facebook"></use></svg>
              Iniciar secion con Facebook
            </button>
            <button class="w-100 py-2 mb-2 btn btn-outline-secondary rounded-3" type="submit">
              <svg class="bi me-1" width="16" height="16"><use xlink:href="#github"></use></svg>
              Iniciar secion con GitHub
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
