<link href="styles.css" rel="stylesheet"/>

<?php include "template/header.php"; ?>
<div class="calendar">
  <h2>Calendrier de disponibilité</h2>
  <table>
    <thead>
      <tr>
        <th>Dim</th>
        <th>Lun</th>
        <th>Mar</th>
        <th>Mer</th>
        <th>Jeu</th>
        <th>Ven</th>
        <th>Sam</th>
      </tr>
    </thead>
    <tbody>
      <?php
        // définir la date du mois actuel
        $date = date('Y-m-01');
        
        // obtenir le nombre de jours dans le mois actuel
        $daysInMonth = date('t', strtotime($date));
        
        // obtenir le jour de la semaine du premier jour du mois actuel
        $firstDayOfWeek = date('w', strtotime($date));
        
        // commencer la première ligne du calendrier
        echo "<tr>";
        
        // boucle pour afficher les jours précédents dans la première ligne
        for ($i = 0; $i < $firstDayOfWeek; $i++) {
          echo "<td></td>";
        }
        
        // boucle pour afficher les jours du mois actuel
        $dayOfMonth = 1;
        while ($dayOfMonth <= $daysInMonth) {
          // obtenir la date pour le jour actuel
          $currentDate = date('Y-m-d', strtotime("$date +$dayOfMonth day"));
          
          // vérifier si la date est disponible ou non
          $isAvailable = true; // remplacez cette ligne avec votre propre logique de disponibilité
          
          // afficher la cellule du jour avec une classe spécifique pour l'état de disponibilité
          echo "<td class='" . ($isAvailable ? "available" : "unavailable") . "'>$dayOfMonth</td>";
          
          // si le jour est un samedi, commencer une nouvelle ligne
          if (date('w', strtotime($currentDate)) == 6) {
            echo "</tr>";
            // si le jour n'est pas le dernier du mois, commencer une nouvelle ligne
            if ($dayOfMonth != $daysInMonth) {
              echo "<tr>";
            }
          }
          
          $dayOfMonth++;
        }
        
        // boucle pour terminer la dernière ligne du calendrier avec des cellules vides si nécessaire
        for ($i = date('w', strtotime($currentDate)) + 1; $i < 7; $i++) {
          echo "<td></td>";
        }
        
        echo "</tr>";
      ?>
    </tbody>
  </table>
</div>

	<br>
<br>
<br>

	<style type="text/css">
		/* Styles pour les boutons */
		.button {
			display: inline-block;
			padding: 10px 20px;
			background-color: #F5DEB3;
			color: white;
			text-decoration: none;
			border-radius: 5px;
			border: none;
			font-size: 18px;
			margin-right: 10px;
		}

		/* Styles pour le bouton de visite */
		.visit {
			background-color: #F5DEB3;
			color: white;
		}

		/* Styles pour le bouton de salle */
		.room {
			background-color: white;
			color: #F5DEB3;
			border: 2px solid #F5DEB3;
		}
	</style><br><br>

	<a href="#" class="button visit">Programmer une visite</a>
	<a href="#" class="button room">Voir la salle</a>

	<br><br>
<br><br>
<h4><center> Comment fonctionnent les visites et réservations ?  </h4><br>
<div>
	<p class="p1" align="left" style="border: 3px black; padding: 5px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum. 
	<br><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </div>
<br><br><br><br>
<?php require "template/footer.php" ?>
