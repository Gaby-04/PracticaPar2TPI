<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <title>Web MVC</title>
  </head>
  <body style="display:flex;min-height:100vh;flex-direction:column; background-color: #D2DAFF;">
    <nav class="navbar navbar-expand-lg  mb-3"style="background-color: #B1B2FF;" >
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Mi Codigo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active d-flex" aria-current="page" href="index.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?Controller=page&amp;action=showCreacion">Africa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?Controller=page&amp;action=showCreacion">Asia</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?Controller=page&amp;action=showCreacion">America</a>
        </li>
        
      </ul>
   
    </div>
  </div>
</nav>

<div class="container mb-3">
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/animales.jpg" class="d-block w-100" style="height: 400px;">
      </div>
      <div class="carousel-item">
      <img src="img/animales2.jpg" class="d-block w-100" style="height: 400px;">
      </div>
      <div class="carousel-item">
      <img src="img/animales3.jpg" class="d-block w-100" style="height: 400px;">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div><div class="container ">
    <div class="row justify-content-end">
        <div class="col col-md-3 align-self-end">
            <form class="row g-3" method="POST" action="src/redireccion.php">
                <div class=" col align-self-end ">
                    <select name="op" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example"style="background-color: #B2C8DF;" >
                    <option selected="">Seleccione una especie. </option>
                    <option value="1">Mamifero</option>
                    <option value="2">Aves</option>
                    <option value="3">Reptiles</option>
                    <option value="4">Peces</option>
                    </select>
                </div>
                <div class="colalign-self-end">
                    <button type="submit" class="btn btn-primary mb-3">Buscar</button>
                </div>
            </form>
              
            
        </div>
        
    </div>
   
</div>





<div class="container ">
    <h1 class="text-center">Aves</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4 mb-3">
    <div class="col">
        <div class="card h-100">
        <img src="img/ave1.jpg" class="card-img-top" style="height: 200px;">
        <div class="card-body">
            <h5 class="card-title">AGUILA</h5>
            <p class="card-text">las águilas poseen un pico grande, poderoso y puntiagudo para desprender la carne de su presa. Cuentan también con tarsos y garras poderosas. Llama también la atención la fuerza de las águilas, que les posibilita alzar en vuelo a presas mucho más pesadas que ellas.</p>
            <audio src="sonidos/torogoz.mp3" controls=""></audio>
        </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100">
        <img src="img/ave2.jpg" class="card-img-top" style="height: 200px;">
        <div class="card-body">
            <h5 class="card-title">GALLINA</h5>
            <p class="card-text">¿Qué es la gallina y sus características?
Resultado de imagen para gallina
La gallina doméstica es un ave Galliforme (de hecho, da nombre al Orden), aves terrestres, grandes y robustas, malas voladoras, que están presentes en todo el mundo.</p>
            <audio src="sonidos/pingui.mp3" controls=""></audio>
        </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100">
        <img src="img/ave3.jpg" class="card-img-top" style="height: 200px;">
        <div class="card-body">
            <h5 class="card-title">PINGUINO</h5>
            <p class="card-text">Tienen el vientre claro y el dorso oscuro, como sistema de camuflaje para confundirse en el agua con la claridad de la luz del sol, o la oscuridad del fondo marino.</p>
            <audio src="sonidos/avestruz.mp3" controls=""></audio>
        </div>
        </div>
    </div>
    
    </div>
</div>
  
  <footer class="bg-light text-center text-lg-start " style="margin-top: auto;">
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          © 2022 Copyright: Katherine Sanchez
      
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </footer>
  
  </body></html>