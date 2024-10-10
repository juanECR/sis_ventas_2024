<div class="container-fluid p-0 " style="margin-top: 70px;">
<div class="container mt-4 mb-4">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-2">
                        <div class="d-flex flex-column">
                            <img src="https://i.pinimg.com/736x/b5/6a/f6/b56af6b8fa1f5b60324491a2e3803313.jpg" class="img-thumbnail mb-2" alt="Thumbnail 1">
                            <img src="https://i.pinimg.com/736x/1c/2d/1c/1c2d1c67254b6a26da8332a21ba31b94.jpg" class="img-thumbnail mb-2" alt="Thumbnail 2">
                            <img src="https://i.pinimg.com/736x/4d/b7/8c/4db78c6ed48924e0cb682b7bdc0be5d4.jpg" class="img-thumbnail mb-2" alt="Thumbnail 3">
                            <img src="https://i.pinimg.com/736x/4d/31/09/4d3109f10bae8a0fa00a80ba899f580f.jpg" class="img-thumbnail mb-2" alt="Thumbnail 4">
                        </div>
                    </div>
                    <div class="col-10">
                      <div id="carouselExampleRide" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="https://i.pinimg.com/564x/e6/44/73/e6447338feda03a2f3df3f9e7210269d.jpg" class="d-block w-100" height="600px" alt="imgcarusel">
                          </div>
                          <div class="carousel-item">
                            <img src="https://i.pinimg.com/736x/b5/6a/f6/b56af6b8fa1f5b60324491a2e3803313.jpg" class="d-block w-100" height="600px" alt="imgcarusel">
                          </div>
                          <div class="carousel-item">
                            <img src="https://i.pinimg.com/736x/1c/2d/1c/1c2d1c67254b6a26da8332a21ba31b94.jpg" class="d-block w-100" height="600px" alt="imgcarusel">
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <h2>SACO HEINZ AZUL</h2>
                <p class="text-muted">Código: SA2585</p>
                <p><del>S/ 399.90</del></p>
                <p class="text-danger h4">A: S/ 199.00</p>
                <p>DESCUENTO DE S/ 200.90</p>
                <span class="badge bg-danger">50% DSCTO</span>
                
                <h6 class="mt-3">Colores Disponibles</h6>
                <div>
                  <span class="color-option"></span>
                    <span class="color-option" style="background-color: rgb(206, 206, 102);"></span>
                    <span class="color-option" style="background-color: navy;"></span>
                </div>
                
                <h6 class="mt-3">TALLAS</h6>
                <div class="btn-group" role="group" aria-label="Tallas">
                    <input type="radio" class="btn-check" name="talla" id="s" autocomplete="off">
                    <label class="btn btn-outline-secondary" for="s">S</label>
                    
                    <input type="radio" class="btn-check" name="talla" id="m" autocomplete="off" checked>
                    <label class="btn btn-outline-secondary" for="m">M</label>
                    
                    <input type="radio" class="btn-check" name="talla" id="l" autocomplete="off">
                    <label class="btn btn-outline-secondary" for="l">L</label>
                    
                    <input type="radio" class="btn-check" name="talla" id="xl" autocomplete="off">
                    <label class="btn btn-outline-secondary" for="xl">XL</label>
                </div>
                
                <div class="mt-3">
                    <label for="cantidad" class="form-label">CANTIDAD</label>
                    <div class="input-group" style="width: 150px;">
                        <button class="btn btn-outline-secondary" type="button">-</button>
                        <input type="text" class="form-control text-center" id="cantidad" value="1">
                        <button class="btn btn-outline-secondary" type="button">+</button>
                    </div>
                </div>
                
                <a href="<?php BASE_URL?>carrito"><button class="btn btn-danger w-100 mt-3">AÑADIR AL CARRITO</button></a>
                
                <p class="mt-3"><small>Delivery gratis a Lima Metropolitana por compras mayores a S/299.90</small></p>
            </div>
        </div>
    </div>
    </div>
    <style>
      .color-option {
          width: 20px;
          height: 20px;
          border-radius: 50%;
          display: inline-block;
          margin-right: 5px;
      }
  </style>