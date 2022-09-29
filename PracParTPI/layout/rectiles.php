<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <title>Web MVC</title>
  </head>
  <body style="display:flex;min-height:100vh;flex-direction:column; background-color: #DAE2B6; " >
    <nav class="navbar navbar-expand-lg  mb-3"style="background-color: #CED89E;" >
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
                    <select name="op" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" style="background-color: #D3EBCD;">
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
    <h1 class="text-center">Rectiles</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4 mb-3">
    <div class="col">
        <div class="card h-100">
        <img src="img/rectil1.jpg" class="card-img-top" style="height: 200px;">
        <div class="card-body">
            <h5 class="card-title">CASCABEL</h5>
            <p class="card-text">Las serpientes de cascabel (Crotalus) son reconocidas como las serpientes más venenosas de Norteamérica. Algunas especies pueden alcanzar hasta 2,5 metros de largo, y 4 kg de peso. Según la especie exacta, tienen un cuerpo delgado y compacto.</p>
            <audio src="sonidos/torogoz.mp3" controls=""></audio>
        </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100">
        <img src="img/rectil2.jpeg" class="card-img-top" style="height: 200px;">
        <div class="card-body">
            <h5 class="card-title">COCODRILO</h5>
            <p class="card-text">Se denomina comúnmente cocodrilo a cualquiera de las 14 especies pertenecientes a la familia de los saurópsidos arcosaurios Crocodylidae. Estos reptiles viven en África, América, Asia y Australia y los científicos estiman que aparecieron hace unos 55 millones de años, durante el Eoceno.</p>
            <audio src="sonidos/pingui.mp3" controls=""></audio>
        </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100">
        <img src="img/rectil3.jpg" class="card-img-top" style="height: 200px;">
        <div class="card-body">
            <h5 class="card-title">CAMALEON</h5>
            <p class="card-text">El camaleón común es una especie típica en su género, del clima mediterráneo. Mide alrededor de 30 centímetros. El camaleón común está adaptado a la vida arborícola. Cuenta con dedos oponibles y cola prensil (motivo por el cual la cola no puede desprenderse del cuerpo).</p>
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