<?php
require_once "models\animal.php";
?>
    <h1 class="text-center">Mamiferos</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4 mb-3">
    <div class="col">
        <div class="card h-100">
        <img src="img/mamifero1.jpg" class="card-img-top" style="height: 200px;">
        <div class="card-body">
            <h5 class="card-title"><?php echo Perro::Nombre() ?></h5>
            <p class="card-text"><?php echo Perro::descripcion() ?></p>
            <audio src="sonidos/torogoz.mp3" controls=""></audio>
        </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100">
        <img src="img/mamifero2.jpg" class="card-img-top" style="height: 200px;">
        <div class="card-body">
            <h5 class="card-title"><?php echo Gato::Nombre() ?></h5>
            <p class="card-text"><?php echo Gato::descripcion() ?></p>
            <audio src="sonidos/pingui.mp3" controls=""></audio>
        </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100">
        <img src="img/mamifero3.jpeg" class="card-img-top" style="height: 200px;">
        <div class="card-body">
            <h5 class="card-title">CONEJO</h5>
            <p class="card-text">Los conejos y las liebres se caracterizan por su cuerpo recubierto de un pelaje denso y suave, por sus orejas largas y por carecer de cola, o si la tienen, por ser muy corta. Aunque los nombres comunes de conejo y liebre se utilizan indistintamente, ambos representan especies diferentes.</p>
            <audio src="sonidos/avestruz.mp3" controls=""></audio>
        </div>
        </div>
    </div>
    
    </div>
</div>