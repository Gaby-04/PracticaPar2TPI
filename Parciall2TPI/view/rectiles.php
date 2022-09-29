<?php
require_once "models\animal.php";
?>

<h1 class="text-center">Rectiles</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4 mb-3">
    <div class="col">
        <div class="card h-100">
        <img src="img/rectil1.jpg" class="card-img-top" style="height: 200px;">
        <div class="card-body">
            <h5 class="card-title"><?php echo Ranas::Nombre() ?></h5>
            <p class="card-text"><?php echo Ranas::descripcion() ?></p>
            <audio src="sonidos/torogoz.mp3" controls=""></audio>
        </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100">
        <img src="img/rectil2.jpeg" class="card-img-top" style="height: 200px;">
        <div class="card-body">
            <h5 class="card-title"><?php echo Anaconda::Nombre()?></</h5>
            <p class="card-text"><?php echo Anaconda::descripcion() ?></p>
            <audio src="sonidos/pingui.mp3" controls=""></audio>
        </div>
        </div>
    </div>
   
    
    </div>
</div>