<link href="styles.css" rel="stylesheet"/>

<?php include "template/header.php"; ?>

<div class= "palacio">
<video class="palacio" src="images\video salle.mp4" type="video.mp4" autoplay ="autoplay" muted="" loop="infinite"

width="100%";
justify-items ="center";
align-items="center";
></video>

<br><br><br><br><br>

</div>
<section class="bg-white">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="row mb-3">
          <div class="col-2">
            <img src="icon\capacite.png" width="50px" class="icon text-primary lazy mr-2" style="display: block; margin: 0 auto;">
          </div>
          <div class="col-10">
            <h5 class="mb-1">Capacité</h5>
            <p class="mb-0">Plus de 500 Places assises</p>
          </div>
        </div>
        <br>

        <div class="row mb-3">
          <div class="col-2">
            <img src="icon\horaire.png" width="50px" class="icon text-primary lazy mr-2" style="display: block; margin: 0 auto;">
          </div>
          <div class="col-10">
            <h5 class="mb-1">Horaires</h5>
            <p class="mb-0">Journée et Soirée jusqu'à 5h</p>
          </div>
        </div>
        <br>

        <div class="row">
          <div class="col-2">
            <img src="icon\localisation.png" width="50px" class="icon text-primary lazy mr-2" style="display: block; margin: 0 auto;">
          </div>
          <div class="col-10">
            <h5 class="mb-1">Localisation</h5>
            <p class="mb-0">91630 Avrainville</p>
          </div>
        </div>
      </div>
      <br>

      <div class="col-md-6">
        <div class="row mb-3">
          <div class="col-2">
            <img src="icon\reservation.png" width="50px" class="icon text-primary lazy mr-2" style="display: block; margin: 0 auto;">
          </div>
          <div class="col-10">
            <h5 class="mb-1">Espace</h5>
            <p class="mb-0">Journée et Soirée jusqu'à 5h</p>
          </div>
        </div>
        <br>

        <div class="row mb-3">
          <div class="col-2">
            <img src="icon\Haut_parleur.png" width="50px" class="icon text-primary lazy mr-2" style="display: block; margin: 0 auto;">
          </div>
          <br>

          <div class="col-10">
            <h5 class="mb-1">Dansant</h5>
            <p class="mb-0">Oui</p>
          </div>
        </div>
        <br>

        <div class="row">
          <div class="col-2">
            <img src="icon\parking.png" width="50px" class="icon text-primary lazy mr-2" style="display: block; margin: 0 auto;">
          </div>
          <div class="col-10">
            <h5 class="mb-1">Parking</h5>
            <p class="mb-0">Oui</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<br><br><br><br><br><br>



<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="carousel-item active">
     <img class="d-block w-5 h-5" src="images\fete.jpeg" alt="1st slide">
    </div>

    <div class="carousel-item">
      <img class="d-block w-5 h-5" src="images\reception.jpg" alt="2nd slide">
    </div>

    <div class="carousel-item">
       <img class="d-block w-5 h-5" src="images\mariage.jpeg" alt="3rd slide">
    </div>

    <div class="carousel-item">
      <img class="d-block w-5 h-5" src="images\anniversaire.png.webp" alt="4th slide">
    </div>

    <div class="carousel-item">
      <img class="d-block w-5 h-5" src="images\evenementt pro.jpg" alt="5th slide">
    </div>
  </div>

  <!-- Controls -->
  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<script>
  $(document).ready(function(){
    // Active le carrousel
    $('.carousel').carousel({
      interval: 5000 // Change image toutes les 5 secondes
    });
  });
</script>


<br>

<?php require "template/footer.php" ?>


















