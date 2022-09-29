<?php
require_once "models\animal.php";
?>


<h1 class="text-center">Aves</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4 mb-3">
    <div class="col">
        <div class="card h-100">
        <img src="img/ave1.jpg" class="card-img-top" style="height: 200px;">
        <div class="card-body">
            <h5 class="card-title"><?php echo Torogoz::nombre() ?></h5>
            <p class="card-text"><?php echo Torogoz::descripcion()?></p>
            <audio src="sonidos/torogoz.mp3" controls=""></audio>
        </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100">
        <img src="img/ave2.jpg" class="card-img-top" style="height: 200px;">
        <div class="card-body">
            <h5 class="card-title"><?php echo Avestruces::nombre()?></h5>
            <p class="card-text"><?php echo Avestruces::descripcion()?></p>
            <audio src="sonidos/pingui.mp3" controls=""></audio>
        </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100">
        <img src="img/ave3.jpg" class="card-img-top" style="height: 200px;">
        <div class="card-body">
            <h5 class="card-title"><?php echo Pinguinos::nombre()?></h5>
            <p class="card-text"><?php echo Pinguinos::descripcion()?></p>
            <p class="card-text"><?php echo Pinguinos::correr()?></p>
            <p class="card-text"><?php echo Pinguinos::Modo()?></p>
            <audio src="sonidos/avestruz.mp3" controls=""></audio>
        </div>
        </div>
    </div>
    
    </div>
</div>