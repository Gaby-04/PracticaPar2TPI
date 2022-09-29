<div class="container mb-3">
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/animales.jpg" class="d-block w-100" style="height: 400px;">
    </div>
    <div class="carousel-item">
    <img src=img/animales2.jpg" class="d-block w-100" style="height: 400px;">
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
      <img src="img/ave2.jpg" class="card-img-top" style="height: 200px;">
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
      <img src="img/mamifero3.jpeg" class="card-img-top" style="height: 200px;">
      <div class="card-body">
          <h5 class="card-title">conejo</h5>
          <p class="card-text">Los conejos y las liebres se caracterizan por su cuerpo recubierto de un pelaje denso y suave, por sus orejas largas y por carecer de cola, o si la tienen, por ser muy corta. Aunque los nombres comunes de conejo y liebre se utilizan indistintamente.</p>
          <audio src="sonidos/delphine.mp3" controls=""></audio>
      </div>
      </div>
  </div>
  <div class="col">
      <div class="card h-100">
      <img src="img/ave3.jpg" class="card-img-top" style="height: 200px;">
      <div class="card-body">
          <h5 class="card-title">Pinguino</h5>
          <p class="card-text">Tienen el vientre claro y el dorso oscuro, como sistema de camuflaje para confundirse en el agua con la claridad de la luz del sol, o la oscuridad del fondo marino.</p>
          <audio src="sonidos/perro.mp3" controls=""></audio>
      </div>
      </div>
  </div>
  <div class="col">
      <div class="card h-100">
      <img src="img/pez2.jpg" class="card-img-top" style="height: 200px;">
      <div class="card-body">
          <h5 class="card-title">Pez payaso</h5>
          <p class="card-text">El pez payaso vive en aguas cálidas y poco profundas como las del Mar Rojo, el Suroeste del Océano Pacífico y el Océano Índico. Lo que comen los peces payaso en su hábitat natural es una dieta muy variada, que incluye desde restos de animales del fondo marino, hasta moluscos pequeños que él mismo caza.</p>
          <audio src="sonidos/anaconda.mp3" controls=""></audio>
      </div>
      </div>
  </div>
  </div>
</div>