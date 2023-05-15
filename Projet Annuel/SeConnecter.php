<link href="styles.css" rel="stylesheet"/>

<?php include "template/header.php"; ?>
<br>
<h4><center>Se connecter</h4>
<br>

            <style>
    .overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0,0,0,0.5);
        display: none;
        justify-content: center;
        align-items: center;
        z-index: 9999;
    }

    .form {
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0,0,0,0.3);
    }
    </style>

<div>
	<p class="p1" align="left" style="border: 1px beige; padding: 10px;">
		<label for="email" class="form-label">Adresse de messagerie*</label>
    	<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Entrez votre e-mail">
		<label for="pwd" class="form-label">Mot de passe* </label>
    	<input type="password" name="pwd" class="form-control" id="	pwd" required="required" placeholder="Entrez votre mot de passe">
    	<br><br>
    	<input type="button" value="Connexion"> 
    	&nbsp;&nbsp;&nbsp;&nbsp; 
    	<input type="button" class="btn1"> Se souvenir de moi ?
    	<br><br><a href="#" onclick="openOverlay()"><i>Mot de passe oublié ?</i></a>

	<!-- Overlay pour réinitialiser le mot de passe -->
	<div class="overlay" id="overlay">
		<div class="form">
			<h2>Réinitialiser le mot de passe</h2>
			<form action="reset_password.php" method="post">
				<label for="email">Email :</label>
				<input type="email" id="email" name="email" required><br><br>
				<button type="submit">Réinitialiser</button>
			</form>
			<button onclick="closeOverlay()">Fermer</button>
		</div>
	</div>

	<script>
	// Fonction pour ouvrir l'overlay
	function openOverlay() {
		document.getElementById("overlay").style.display = "flex";
	}

	// Fonction pour fermer l'overlay
	function closeOverlay() {
		document.getElementById("overlay").style.display = "none";
	}
	</script>

	<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	// Vérification du champ email
	if (empty($_POST['email'])) {
		echo "Veuillez saisir votre email.";
	} else {
		$email = $_POST['email'];

		// Envoi d'un email avec le lien de réinitialisation de mot de passe
		$to = $email;
		$subject = "Réinitialisation de votre mot de passe";
		$message = "Bonjour,\n\nPour réinitialiser votre mot de passe, veuillez cliquer sur le lien ci-dessous :\n\nhttp://exemple.com/reset_password.php\n\nCordialement,\nL'équipe de exemple.com";
		$headers = "From: webmaster@example.com" . "\r\n" .
			"Reply-To: webmaster@example.com" . "\r\n" .
			"X-Mailer: PHP/" . phpversion();

		if (mail($to, $subject, $message, $headers)) {
			echo "Un email de réinitialisation de mot de passe a été envoyé à votre adresse email.";
		} else {
			echo "Erreur lors de l'envoi de l'email de réinitialisation de mot de passe.";
		}
	}
}
?>
</body>

	</p>
</div>
<br>
<h5><a href="S'inscrire.php"><center>Vous n'avez pas de compte ?</a></h5><br><br>

<div>
	
</div>

    <?php require "template/footer.php" ?>