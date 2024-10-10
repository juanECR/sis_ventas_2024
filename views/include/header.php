<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elegant-Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    
  </head>
<body>
  
    <!-----------------------------menu---------------------- -->
    <nav class="navbar navbar-expand-lg" style="background: black;position:fixed;z-index: 1;width: 100%;height:70px; margin-top:-70px;">
      <div class="container-fluid" >
        <a class="navbar-brand " href="index.html" ><img src="https://www.alonsport.es/users/26844/shop/logo.jpg" alt="logo" width="150px" height="50px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
            <li class="nav-item" >
              <a class="nav-link active text-white" aria-current="page" href="<?php BASE_URL?>inicio">Inicio</a>
            </li>
            <li class="nav-item"style="box-shadow: 0px 2px 0px 0px white;">
              <a class="nav-link text-white" href="<?php BASE_URL?>producto">Productos</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Categorias
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="<?php BASE_URL?>proHombre">Hombres</a></li>
                <li><a class="dropdown-item" href="<?php BASE_URL?>ProMujer">Mujeres</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="<?php BASE_URL?>niños">Niños</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="<?php BASE_URL?>perfil">Perfil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="<?php BASE_URL?>nosotros">Nosotros</a>
            </li>
          </ul>
          <a href="<?php BASE_URL?>carrito"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white" class="bi bi-cart4" viewBox="0 0 16 16">
            <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l.5 2H5V5zM6 5v2h2V5zm3 0v2h2V5zm3 0v2h1.36l.5-2zm1.11 3H12v2h.61zM11 8H9v2h2zM8 8H6v2h2zM5 8H3.89l.5 2H5zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0"/>
          </svg></a>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>