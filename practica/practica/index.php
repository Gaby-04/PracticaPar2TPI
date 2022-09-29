<html lang="en"><head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Web MVC</title>
</head>
<body style="display:flex;min-height:100vh;flex-direction:column;">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
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
      <img src="Img/animales.jpg" class="d-block w-100" style="height: 400px;">
    </div>
    <div class="carousel-item">
    <img src="Img/animales2.jpg" class="d-block w-100" style="height: 400px;">
    </div>
    <div class="carousel-item">
    <img src="Img/animales3.jpg" class="d-block w-100" style="height: 400px;">
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
                  <select name="op" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
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
  <div class="row row-cols-1 row-cols-md-3 g-4 mb-3">
  <div class="col">
      <div class="card h-100">
      <img src="Img/ave2.jpg" class="card-img-top" style="height: 200px;">
      <div class="card-body">
          <h5 class="card-title">Gallina</h5>
          <p class="card-text">¿Qué es la gallina y sus características?
            Resultado de imagen para informacion de la gallina
            La gallina doméstica es un ave Galliforme (de hecho, da nombre al Orden), aves terrestres, grandes y robustas, malas voladoras, que están presentes en todo el mundo. Más concretamente, pertenecen a la familia Phasianidae, subfamilia Gallininae.</p>
          <audio src="sonidos/torogoz.mp3" controls=""></audio>
      </div>
      </div>
  </div>
  <div class="col">
      <div class="card h-100">
      <img src="Img/mamifero3.jpeg" class="card-img-top" style="height: 200px;">
      <div class="card-body">
          <h5 class="card-title">conejo</h5>
          <p class="card-text">Los conejos y las liebres se caracterizan por su cuerpo recubierto de un pelaje denso y suave, por sus orejas largas y por carecer de cola, o si la tienen, por ser muy corta. Aunque los nombres comunes de conejo y liebre se utilizan indistintamente.</p>
          <audio src="sonidos/delphine.mp3" controls=""></audio>
      </div>
      </div>
  </div>
  <div class="col">
      <div class="card h-100">
      <img src="Img/ave3.jpg" class="card-img-top" style="height: 200px;">
      <div class="card-body">
          <h5 class="card-title">Pinguino</h5>
          <p class="card-text">Tienen el vientre claro y el dorso oscuro, como sistema de camuflaje para confundirse en el agua con la claridad de la luz del sol, o la oscuridad del fondo marino.</p>
          <audio src="sonidos/perro.mp3" controls=""></audio>
      </div>
      </div>
  </div>
  <div class="col">
      <div class="card h-100">
      <img src="Img/pez2.jpg" class="card-img-top" style="height: 200px;">
      <div class="card-body">
          <h5 class="card-title">Pez payaso</h5>
          <p class="card-text">El pez payaso vive en aguas cálidas y poco profundas como las del Mar Rojo, el Suroeste del Océano Pacífico y el Océano Índico. Lo que comen los peces payaso en su hábitat natural es una dieta muy variada, que incluye desde restos de animales del fondo marino, hasta moluscos pequeños que él mismo caza.</p>
          <audio src="sonidos/anaconda.mp3" controls=""></audio>
      </div>
      </div>
  </div>
  </div>
</div>

<footer class="bg-light text-center text-lg-start " style="margin-top: auto;">
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2020 Copyright: Katherine Sanchez
    
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</footer>

</body></html>