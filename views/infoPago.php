<div class="container container-fluid p-0 " style="margin-top: 70px;">
      <main>
        <div class="py-5 text-center">
          <img class="d-block mx-auto mb-4" src="https://i.pinimg.com/564x/4e/56/b0/4e56b0a53d2857bcb414c6fe67d76b06.jpg" alt="" width="72" height="57">
          <h2>Informacion de pago</h2>
          <p class="lead">Pago seguro</p>
        </div>
    
        <div class="row g-5">
          <div class="col-md-5 col-lg-4 order-md-last">
         
        <div id="form-carrito" class="col-md-5 col-lg-12 order-md-last">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-primary">Informacion de pago</span>
            <span class="badge bg-primary rounded-pill">3</span>
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-sm">
              <div>
                <h6 class="my-0">Pantalones cortos Jordan</h6>
                <small class="text-body-secondary">pantalon corto crema</small>
              </div>
              <span class="text-body-secondary">S/.30.00</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-sm">
              <div>
                <h6 class="my-0">Majesda</h6>
                <small class="text-body-secondary">Casaca majesda</small>
              </div>
              <span class="text-body-secondary">S/.30.00</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-sm">
              <div>
                <h6 class="my-0">Zapatilla nike black</h6>
                <small class="text-body-secondary"> zapatilla Nike negra</small>
              </div>
              <span class="text-body-secondary">S/.30.00</span>
            </li>
            <li class="list-group-item d-flex justify-content-between bg-body-tertiary">
              <div class="text-success">
                <h6 class="my-0">Codigo promocional</h6>
                <small>XJKSHDMSS</small>
              </div>
              <span class="text-success">−S/. 50.00</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <span>Total (PEN)</span>
              <strong>S/.40.00</strong>
            </li>
          </ul>
        </div>
    
          </div>

          <div class="col-md-7 col-lg-8">
            <h4 class="mb-3">Direccion de envio</h4>
            <form class="needs-validation" novalidate="">
              <div class="row g-3">
                <div class="col-sm-6">
                  <label for="firstName" class="form-label">First name</label>
                  <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                  <div class="invalid-feedback">
                    Valid first name is required.
                  </div>
                </div>
    
                <div class="col-sm-6">
                  <label for="lastName" class="form-label">Last name</label>
                  <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
                  <div class="invalid-feedback">
                    Valid last name is required.
                  </div>
                </div>
    
                <div class="col-12">
                  <label for="username" class="form-label">Username</label>
                  <div class="input-group has-validation">
                    <span class="input-group-text">@</span>
                    <input type="text" class="form-control" id="username" placeholder="Username" required="">
                  <div class="invalid-feedback">
                      Your username is required.
                    </div>
                  </div>
                </div>
    
                <div class="col-12">
                  <label for="email" class="form-label">Email <span class="text-body-secondary">(Optional)</span></label>
                  <input type="email" class="form-control" id="email" placeholder="you@example.com">
                  <div class="invalid-feedback">
                    Please enter a valid email address for shipping updates.
                  </div>
                </div>
    
                <div class="col-12">
                  <label for="address" class="form-label">Address</label>
                  <input type="text" class="form-control" id="address" placeholder="1234 Main St" required="">
                  <div class="invalid-feedback">
                    Please enter your shipping address.
                  </div>
                </div>
    
                <div class="col-12">
                  <label for="address2" class="form-label">Address 2 <span class="text-body-secondary">(Optional)</span></label>
                  <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
                </div>
    
                <div class="col-md-5">
                  <label for="country" class="form-label">Country</label>
                  <select class="form-select" id="country" required="">
                    <option value="">Choose...</option>
                    <option>United States</option>
                  </select>
                  <div class="invalid-feedback">
                    Please select a valid country.
                  </div>
                </div>
    
                <div class="col-md-4">
                  <label for="state" class="form-label">State</label>
                  <select class="form-select" id="state" required="">
                    <option value="">Choose...</option>
                    <option>California</option>
                  </select>
                  <div class="invalid-feedback">
                    Please provide a valid state.
                  </div>
                </div>
    
                <div class="col-md-3">
                  <label for="zip" class="form-label">Zip</label>
                  <input type="text" class="form-control" id="zip" placeholder="" required="">
                  <div class="invalid-feedback">
                    Zip code required.
                  </div>
                </div>
              </div>
    
              <hr class="my-4">
    
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="same-address">
                <label class="form-check-label" for="same-address">Shipping address is the same as my billing address</label>
              </div>
    
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="save-info">
                <label class="form-check-label" for="save-info">Save this information for next time</label>
              </div>
    
              <hr class="my-4">
    
              <h4 class="mb-3">Pago</h4>
    
              <div class="my-3">
                <div class="form-check">
                  <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked="" required="">
                  <label class="form-check-label" for="credit">Credit card</label>
                </div>
                <div class="form-check">
                  <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required="">
                  <label class="form-check-label" for="debit">Debit card</label>
                </div>
                <div class="form-check">
                  <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required="">
                  <label class="form-check-label" for="paypal">PayPal</label>
                </div>
              </div>
    
              <div class="row gy-3">
                <div class="col-md-6">
                  <label for="cc-name" class="form-label">Name on card</label>
                  <input type="text" class="form-control" id="cc-name" placeholder="" required="">
                  <small class="text-body-secondary">Full name as displayed on card</small>
                  <div class="invalid-feedback">
                    Name on card is required
                  </div>
                </div>
    
                <div class="col-md-6">
                  <label for="cc-number" class="form-label">Credit card number</label>
                  <input type="text" class="form-control" id="cc-number" placeholder="" required="">
                  <div class="invalid-feedback">
                    Credit card number is required
                  </div>
                </div>
    
                <div class="col-md-3">
                  <label for="cc-expiration" class="form-label">Expiration</label>
                  <input type="text" class="form-control" id="cc-expiration" placeholder="" required="">
                  <div class="invalid-feedback">
                    Expiration date required
                  </div>
                </div>
    
                <div class="col-md-3">
                  <label for="cc-cvv" class="form-label">CVV</label>
                  <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
                  <div class="invalid-feedback">
                    Security code required
                  </div>
                </div>
              </div>
    
              <hr class="my-4">
    
              <button class="w-100 btn btn-primary btn-lg mb-5" type="submit">Pagar</button>
            </form>
          </div>
        </div>
      </main>
    

    </div>