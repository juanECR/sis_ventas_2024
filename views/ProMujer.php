<div class="col-md-12 " style="margin: 70px 0px 0px 0px;">
<div style="display: flex;">
  <div class="flex-shrink-0 p-3" style="width: 280px;">
    <a href="/" class="d-flex align-items-center pb-3 mb-3 link-body-emphasis text-decoration-none border-bottom">
      <svg class="bi pe-none me-2" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
      <span class="fs-5 fw-semibold">Busqueda</span>
    </a>
    <ul class="list-unstyled ps-0">
      <li class="mb-1">
        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
         categoria
        </button>
        <div class="collapse show" id="home-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">polo</a></li>
            <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">pantalon</a></li>
            <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">zapatilla</a></li>
          </ul>
        </div>
      </li>
      <li class="mb-1">
        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="true">
          color
        </button>
        <div class="collapse show" id="dashboard-collapse" >
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">rojo</a></li>
            <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">negro</a></li>
            <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">blanco</a></li>
            <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">azul</a></li>
          </ul>
        </div>
      </li>
      <li class="mb-1">
        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
          precio
        </button>
        <div class="collapse" id="orders-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">PEN 50.00 - 100.00</a></li>
            <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">PEN 100.00 - 300.00</a></li>
            <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">PEN 200.00 - 1000.00</a></li>
            <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">PEN 1000.00 +</a></li>
          </ul>
        </div>
      </li>
      <li class="border-top my-3"></li>
      <li class="mb-1">
        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="true">
          descueunto
        </button>
        <div class="collapse show" id="account-collapse" >
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">20%</a></li>
            <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">50%</a></li>
            <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">70%</a></li>
            <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">80% </a></li>
          </ul>
        </div>
      </li>
    </ul>
  </div>
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3">
          <h2>12 productos</h2>
          <div class="dropdown">
            <button class="btn btn-light dropdown-toggle" type="button" id="orderDropdown" data-bs-toggle="dropdown" aria-expanded="false">
              Ordenar por
            </button>
            <ul class="dropdown-menu" aria-labelledby="orderDropdown">
              <li><a class="dropdown-item" href="#">Nombre</a></li>
              <li><a class="dropdown-item" href="#">Precio</a></li>
            </ul>
          </div>
        </div>
      
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
          <!-- productos -->
          <div class="col">
            <div class="card h-100">
              <div class="position-relative">
               <a href="<?php BASE_URL?>DetalleProducto"><img src="https://i.pinimg.com/564x/08/6a/98/086a98e69162a8d344ebe112c59d4b0a.jpg" class="card-img-top" alt="Casaca Hombre Liam Rojo Carmin"></a> 
                <span class="position-absolute top-0 start-0 bg-dark text-white px-2 py-1">-30%</span>
              </div>
              <div class="card-body">
                <h6 class="card-subtitle mb-2 text-muted">HAWK</h6>
                <h5 class="card-title">jogger cargo blak</h5>
                <p class="card-text">
                  <span class="text-decoration-line-through">S/ 159.90</span>
                  <span class="fw-bold">S/ 79.95</span>
                </p>
                <div>
                  <span class="badge bg-dark rounded-circle p-2 me-1"></span>
                  <span class="badge bg-primary rounded-circle p-2 me-1"></span>
                  <span class="badge bg-danger rounded-circle p-2 me-1"></span>
                  <small class="text-muted">+1</small>
                </div>
              </div>
            </div>
          </div>
       
          <div class="col">
            <div class="card h-100">
              <div class="position-relative">
               <a href="<?php BASE_URL?>DetalleProducto"><img src="https://i.pinimg.com/564x/89/d4/12/89d412c02f552f4240911d19c585a919.jpg" class="card-img-top" alt="Casaca Hombre Liam Rojo Carmin"></a> 
                <span class="position-absolute top-0 start-0 bg-dark text-white px-2 py-1">-50%</span>
              </div>
              <div class="card-body">
                <h6 class="card-subtitle mb-2 text-muted">HAWK</h6>
                <h5 class="card-title">jogger cargo grey</h5>
                <p class="card-text">
                  <span class="text-decoration-line-through">S/ 259.90</span>
                  <span class="fw-bold">S/ 100.95</span>
                </p>
                <div>
                  <span class="badge bg-dark rounded-circle p-2 me-1"></span>
                  <span class="badge bg-primary rounded-circle p-2 me-1"></span>
                  <span class="badge bg-danger rounded-circle p-2 me-1"></span>
                  <small class="text-muted">+2</small>
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card h-100">
              <div class="position-relative">
               <a href="<?php BASE_URL?>DetalleProducto"><img src="https://i.pinimg.com/564x/6d/2b/ab/6d2bab94cb9c264e0af13cda3457c6c9.jpg" class="card-img-top" alt="Casaca Hombre Liam Rojo Carmin"></a> 
                <span class="position-absolute top-0 start-0 bg-dark text-white px-2 py-1">-40%</span>
              </div>
              <div class="card-body">
                <h6 class="card-subtitle mb-2 text-muted">HAWK</h6>
                <h5 class="card-title">jogger cargo green</h5>
                <p class="card-text">
                  <span class="text-decoration-line-through">S/ 159.90</span>
                  <span class="fw-bold">S/ 79.95</span>
                </p>
                <div>
                  <span class="badge bg-dark rounded-circle p-2 me-1"></span>
                  <span class="badge bg-primary rounded-circle p-2 me-1"></span>
                  <span class="badge bg-danger rounded-circle p-2 me-1"></span>
                  <small class="text-muted">+1</small>
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card h-100">
              <div class="position-relative">
               <a href="<?php BASE_URL?>DetalleProducto"><img src="https://i.pinimg.com/564x/70/af/d0/70afd0e297864199376cd1fa0a80992c.jpg" class="card-img-top" alt="Casaca Hombre Liam Rojo Carmin"></a> 
                <span class="position-absolute top-0 start-0 bg-dark text-white px-2 py-1">-50%</span>
              </div>
              <div class="card-body">
                <h6 class="card-subtitle mb-2 text-muted">NIKEK</h6>
                <h5 class="card-title">conjunto hombre cream</h5>
                <p class="card-text">
                  <span class="text-decoration-line-through">S/ 159.90</span>
                  <span class="fw-bold">S/ 79.95</span>
                </p>
                <div>
                  <span class="badge bg-dark rounded-circle p-2 me-1"></span>
                  <span class="badge bg-primary rounded-circle p-2 me-1"></span>
                  <span class="badge bg-danger rounded-circle p-2 me-1"></span>
                  <small class="text-muted">+1</small>
                </div>
              </div>
            </div>
          </div>


          <div class="col">
            <div class="card h-100">
              <div class="position-relative">
               <a href="<?php BASE_URL?>DetalleProducto"><img src="https://i.pinimg.com/564x/df/61/78/df61785b7ac9c5c4a7292a604fbe7ea6.jpg" class="card-img-top" alt="Casaca Hombre Liam Rojo Carmin"></a> 
                <span class="position-absolute top-0 start-0 bg-dark text-white px-2 py-1">-50%</span>
              </div>
              <div class="card-body">
                <h6 class="card-subtitle mb-2 text-muted">PUMA</h6>
                <h5 class="card-title">conjunto greeean</h5>
                <p class="card-text">
                  <span class="text-decoration-line-through">S/ 159.90</span>
                  <span class="fw-bold">S/ 79.95</span>
                </p>
                <div>
                  <span class="badge bg-dark rounded-circle p-2 me-1"></span>
                  <span class="badge bg-primary rounded-circle p-2 me-1"></span>
                  <span class="badge bg-danger rounded-circle p-2 me-1"></span>
                  <small class="text-muted">+1</small>
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card h-100">
              <div class="position-relative">
               <a href="<?php BASE_URL?>DetalleProducto"><img src="https://i.pinimg.com/564x/4f/b8/b3/4fb8b372a9638d24640e8b6a3c8b25ad.jpg" class="card-img-top" alt="Casaca Hombre Liam Rojo Carmin"></a> 
                <span class="position-absolute top-0 start-0 bg-dark text-white px-2 py-1">-50%</span>
              </div>
              <div class="card-body">
                <h6 class="card-subtitle mb-2 text-muted">LOS ANGELES</h6>
                <h5 class="card-title">camisa crema para hombre</h5>
                <p class="card-text">
                  <span class="text-decoration-line-through">S/ 159.90</span>
                  <span class="fw-bold">S/ 79.95</span>
                </p>
                <div>
                  <span class="badge bg-dark rounded-circle p-2 me-1"></span>
                  <span class="badge bg-primary rounded-circle p-2 me-1"></span>
                  <span class="badge bg-danger rounded-circle p-2 me-1"></span>
                  <small class="text-muted">+1</small>
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card h-100">
              <div class="position-relative">
               <a href="<?php BASE_URL?>DetalleProducto"><img src="https://i.pinimg.com/564x/80/60/5d/80605d4039c33364d13685a7b1e460dc.jpg" class="card-img-top" alt="Casaca Hombre Liam Rojo Carmin"></a> 
                <span class="position-absolute top-0 start-0 bg-dark text-white px-2 py-1">-50%</span>
              </div>
              <div class="card-body">
                <h6 class="card-subtitle mb-2 text-muted">HAWK</h6>
                <h5 class="card-title">Casaca Hombre Liam Rojo Carmin</h5>
                <p class="card-text">
                  <span class="text-decoration-line-through">S/ 159.90</span>
                  <span class="fw-bold">S/ 79.95</span>
                </p>
                <div>
                  <span class="badge bg-dark rounded-circle p-2 me-1"></span>
                  <span class="badge bg-primary rounded-circle p-2 me-1"></span>
                  <span class="badge bg-danger rounded-circle p-2 me-1"></span>
                  <small class="text-muted">+1</small>
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card h-100">
              <div class="position-relative">
               <a href="<?php BASE_URL?>DetalleProducto"><img src="https://i.pinimg.com/736x/e0/d8/a9/e0d8a94e8298800a226c42c0ebb65a71.jpg" class="card-img-top" alt="Casaca Hombre Liam Rojo Carmin"></a> 
                <span class="position-absolute top-0 start-0 bg-dark text-white px-2 py-1">-50%</span>
              </div>
              <div class="card-body">
                <h6 class="card-subtitle mb-2 text-muted">HAWK</h6>
                <h5 class="card-title">Casaca Hombre Liam Rojo Carmin</h5>
                <p class="card-text">
                  <span class="text-decoration-line-through">S/ 159.90</span>
                  <span class="fw-bold">S/ 79.95</span>
                </p>
                <div>
                  <span class="badge bg-dark rounded-circle p-2 me-1"></span>
                  <span class="badge bg-primary rounded-circle p-2 me-1"></span>
                  <span class="badge bg-danger rounded-circle p-2 me-1"></span>
                  <small class="text-muted">+1</small>
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card h-100">
              <div class="position-relative">
               <a href="<?php BASE_URL?>DetalleProducto"><img src="https://i.pinimg.com/564x/87/74/06/877406ef6b4c9a8b4e19364acc631c6c.jpg" class="card-img-top" alt="Casaca Hombre Liam Rojo Carmin"></a> 
                <span class="position-absolute top-0 start-0 bg-dark text-white px-2 py-1">-50%</span>
              </div>
              <div class="card-body">
                <h6 class="card-subtitle mb-2 text-muted">HAWK</h6>
                <h5 class="card-title">Casaca Hombre Liam Rojo Carmin</h5>
                <p class="card-text">
                  <span class="text-decoration-line-through">S/ 159.90</span>
                  <span class="fw-bold">S/ 79.95</span>
                </p>
                <div>
                  <span class="badge bg-dark rounded-circle p-2 me-1"></span>
                  <span class="badge bg-primary rounded-circle p-2 me-1"></span>
                  <span class="badge bg-danger rounded-circle p-2 me-1"></span>
                  <small class="text-muted">+1</small>
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card h-100">
              <div class="position-relative">
               <a href="<?php BASE_URL?>DetalleProducto"><img src="https://i.pinimg.com/564x/37/8a/4e/378a4e951efe696b47dd4d4db64f88b8.jpg" class="card-img-top" alt="Casaca Hombre Liam Rojo Carmin"></a> 
                <span class="position-absolute top-0 start-0 bg-dark text-white px-2 py-1">-50%</span>
              </div>
              <div class="card-body">
                <h6 class="card-subtitle mb-2 text-muted">HAWK</h6>
                <h5 class="card-title">Casaca Hombre Liam Rojo Carmin</h5>
                <p class="card-text">
                  <span class="text-decoration-line-through">S/ 159.90</span>
                  <span class="fw-bold">S/ 79.95</span>
                </p>
                <div>
                  <span class="badge bg-dark rounded-circle p-2 me-1"></span>
                  <span class="badge bg-primary rounded-circle p-2 me-1"></span>
                  <span class="badge bg-danger rounded-circle p-2 me-1"></span>
                  <small class="text-muted">+1</small>
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card h-100">
              <div class="position-relative">
               <a href="<?php BASE_URL?>DetalleProducto"><img src="https://i.pinimg.com/564x/ea/28/a6/ea28a6b1a6ff6eb525afdcabd194a949.jpg" class="card-img-top" alt="Casaca Hombre Liam Rojo Carmin"></a> 
                <span class="position-absolute top-0 start-0 bg-dark text-white px-2 py-1">-50%</span>
              </div>
              <div class="card-body">
                <h6 class="card-subtitle mb-2 text-muted">HAWK</h6>
                <h5 class="card-title">Casaca Hombre Liam Rojo Carmin</h5>
                <p class="card-text">
                  <span class="text-decoration-line-through">S/ 159.90</span>
                  <span class="fw-bold">S/ 79.95</span>
                </p>
                <div>
                  <span class="badge bg-dark rounded-circle p-2 me-1"></span>
                  <span class="badge bg-primary rounded-circle p-2 me-1"></span>
                  <span class="badge bg-danger rounded-circle p-2 me-1"></span>
                  <small class="text-muted">+1</small>
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card h-100">
              <div class="position-relative">
               <a href="<?php BASE_URL?>DetalleProducto"><img src="https://i.pinimg.com/564x/0c/4e/53/0c4e539d9b0f85ff6879a9d39cd25488.jpg" class="card-img-top" alt="Casaca Hombre Liam Rojo Carmin"></a> 
                <span class="position-absolute top-0 start-0 bg-dark text-white px-2 py-1">-50%</span>
              </div>
              <div class="card-body">
                <h6 class="card-subtitle mb-2 text-muted">HAWK</h6>
                <h5 class="card-title">Casaca Hombre Liam Rojo Carmin</h5>
                <p class="card-text">
                  <span class="text-decoration-line-through">S/ 159.90</span>
                  <span class="fw-bold">S/ 79.95</span>
                </p>
                <div>
                  <span class="badge bg-dark rounded-circle p-2 me-1"></span>
                  <span class="badge bg-primary rounded-circle p-2 me-1"></span>
                  <span class="badge bg-danger rounded-circle p-2 me-1"></span>
                  <small class="text-muted">+1</small>
                </div>
              </div>
            </div>
          </div>   
        </div>
        
      </div>
      </div>
      </div>