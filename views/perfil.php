<div class="conteiner-fluid" style="margin-top: 68px;min-height: 500px;">
    <div class="container" >
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="cards-tab" data-bs-toggle="tab" data-bs-target="#cards" type="button" role="tab" aria-controls="cards" aria-selected="true">
                    <i class="bi bi-credit-card"></i> Mis perfil
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">
                    <i class="bi bi-person"></i> Mis tarjetas
                </button>
            </li>

            <li class="nav-item" role="presentation">
                <button class="nav-link" id="addresses-tab" data-bs-toggle="tab" data-bs-target="#addresses" type="button" role="tab" aria-controls="addresses" aria-selected="false">
                    <i class="bi bi-geo-alt"></i> Mis direcciones
                </button>
            </li>
         
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="orders-tab" data-bs-toggle="tab" data-bs-target="#orders" type="button" role="tab" aria-controls="orders" aria-selected="false">
                    <i class="bi bi-bag"></i> Mis pedidos
                </button>
            </li>
        </ul>
        <div class="tab-content mt-3" id="myTabContent">
            <div class="tab-pane fade show active" id="cards" role="tabpanel" aria-labelledby="cards-tab">
               <h3>Mi perfil</h3>
                <div class="container profile-section" style="margin-top: 68px;">
                    <div class="text-center mb-4">
                        <img src="https://i.pinimg.com/564x/bd/1c/c7/bd1cc751865c67de695216da045579d5.jpg" class="rounded-circle" alt="Profile" width="100">
                        <p class="mt-2">@user1234</p>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>CORREO ELECTRÓNICO</label>
                            <input type="email" class="form-control" value="••••••••••@gmail.com" >
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>TELÉFONO</label>
                            <input type="tel" class="form-control" value="+51 9••••••••" >
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>ID</label>
                            <input type="text" class="form-control" value="••••••456" readonly>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>REGIÓN</name</label>
                            <input type="text" class="form-control" value="PERU"  >
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>CONTRASEÑA</label>
                            <input type="password" class="form-control" value="••••••••" >
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>DISPOSITIVO</label>
                            <input type="text" class="form-control" value="redmi 10c" readonly>
                        </div>
                    </div>
                    <div class="d-grid gap-2 col-6 mx-auto m-3">
                      <button class="btn btn-outline-danger" type="button">MODIFICAR DATOS</button>
                      <button class="btn btn-danger" type="button">ELIMINAR CUENTA</button>
                    </div>
                </div>
      
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <h3>Tarjetas de crédito</h3>
                <a href="info_pago.html"><button class="btn btn-outline-danger mt-3">Añadir tarjeta de crédito</button></a>
                <p class="mt-4 text-center fw-bold">¡Aún no tienes ningún método de pago registrado!</p>
            </div>
            <div class="tab-pane fade" id="addresses" role="tabpanel" aria-labelledby="addresses-tab">
                <h3>Mis direcciones</h3>
                <button class="btn btn-outline-danger mt-3">Añadir Direccion</button>
                <p class="mt-4 text-center fw-bold">¡Aún no tienes ningúna direccion registrada!</p>
            </div>
            <div class="tab-pane fade" id="orders" role="tabpanel" aria-labelledby="orders-tab">
                <h3>Mis pedidos</h3>
                <p class="mt-4 text-center fw-bold">¡Aun no tienes pedidos!</p>
                <a href="productos.html"><button class="btn btn-outline-danger mt-3">Comprar</button></a>
            </div>
        </div>
    </div>
</div>