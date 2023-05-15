<link href="styles.css" rel="stylesheet"/>

<?php include "template/header.php"; ?>

	<p align="center" >
		Vous êtes intéressé(e)s par notre lieu et vous souhaitez faire un devis ? 
<br>C’est possible !<br>
Vous n’avez qu’a vous laisser guider en suivant les étapes..
	</p>

<br><br>
<div class="encadre">
  <p>Étape 1 : choisir le type d’événement souhaité*</p>
  <div>
  <label>
    <input type="checkbox" name="evenement[]" value="mariage">
    Mariage
  </label><br>
  <label>
    <input type="checkbox" name="evenement[]" value="reception">
    Réception
  </label><br>
  <label>
    <input type="checkbox" name="evenement[]" value="anniversaire">
    Anniversaire
  </label><br>
  <label>
    <input type="checkbox" name="evenement[]" value="evenement-pro">
    Événement professionnel
  </label><br>
  <label>
    <input type="checkbox" name="evenement[]" value="fete-soiree">
    Fête / Soirée
  </label><br>
</div>
</div>

<style>
  .encadre {
    border: 1px solid black;
    padding: 10px;
    background-color: white;
  }
  
  .encadre p {
    font-weight: bold;
    font-size: 18px;
    margin: 0;
  }
</style>

<br><br>

<div class="encadre">
  <p> Étape 2 : choisir le nombre d’invité(e)s*</p>
  <div class="range-slider">
  <input class="range-slider__range" type="range" value="50" min="10" max="550">
  <span class="range-slider__value">270</span>
</div>
<?php
// Récupérer la valeur du curseur
if(isset($_POST['rangeValue'])){
  $rangeValue = $_POST['rangeValue'];
  echo "La valeur du curseur est : " . $rangeValue;
}
?>
</div>
<br><br>

<div class="encadre">
  <p> Étape 3 : choisir un service*</p>
  <div>
  <label>
    <input type="checkbox" name="evenement[]" value="mariage">
    location de la salle seule
  </label><br>
  <label>
    <input type="checkbox" name="evenement[]" value="reception">
    location de la salle + prestation 
  </label><br>
 <br><br><br><br>
</div>
</div>


<?php require "template/footer.php" ?>
