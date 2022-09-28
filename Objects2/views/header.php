<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">
    
    <title>Aves-</title>
</head>
<body>
    <header>
        <nav>
            <h1>
                <a href="home.php">
                    Animals
                </a>
            </h1>
        
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="rectiles.php">rectiles</a></li>
                <li><a href="peces.php">peces</a></li>
                <li><a href="mamiferos.php">mamiferos</a></li>
                <li><a href="aves.php">aves</a></li>
                
            </ul>
        </nav>
 </header>

 
    <div class="container-sm animales">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/animales.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/animales2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/animales3.jpg" class="d-block w-100" alt="...">
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
</div>
 
<div class="row justify-content-end">
        <div class="col col-md-3 align-self-end">
            <form class="row g-4" method="POST" action="controllers\PageController.php">
                <div class=" col hola align-self-end ">
                    <select name="op" class="form-select form-select-lg mb-4 hola2" aria-label=".form-select-lg example">
                    <option selected="">Seleccione una especie. </option>
                    <option value="1">Mamifero</option>
                    <option value="2">Aves</option>
                    <option value="3">Reptiles</option>
                    <option value="4">Peces</option>
                    </select>
                </div>
                <div class="colalign-self-end">
                    <button type="submit" class="btn btn-primary mb-3" name ="buscar">Buscar</button>
                </div>
            </form>
              
            
        </div>
        
    </div>

    <?php

   

  


   
?>
   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
