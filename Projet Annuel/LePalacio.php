<link href="styles.css" rel="stylesheet"/>

<?php include "template/header.php"; ?>
<br>
<br>
<h4><center>La salle de réception en quelques mots ? </h4>
<br>

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

<style>
		.container {
			display: flex;
			flex-wrap: wrap;
			justify-content: center;
			align-items: center;
		}

		.image {
			position: relative;
			margin: 10px;
			width: 250px;
			height: 250px;
			overflow: hidden;
		}

		.image img {
			display: block;
			width: 100%;
			height: 100%;
			object-fit: cover;
			transition: transform 0.3s ease;
		}

		.image:hover img {
			transform: scale(1.1);
		}

		.image .text {
			position: absolute;
			bottom: 0;
			left: 0;
			right: 0;
			background-color: rgba(0, 0, 0, 0.6);
			color: white;
			font-size: 20px;
			padding: 10px;
			opacity: 0;
			transition: opacity 0.3s ease;
		}

		.image:hover .text {
			opacity: 1;
		}
	</style>
	<div class="container">
		<div class="image">
			<img src="images\avis 1.png" alt="Image 1">
			<div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget ante id velit bibendum bibendum nec eget sapien. </div>
		</div>
		<div class="image">
			<img src="images\avis sofia.jpg" alt="Image 2">
				<div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget ante id velit bibendum bibendum nec eget sapien. </div>
		</div>
		<div class="image">
			<img src="images\avis moi.jpeg" alt="Image 3">
				<div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget ante id velit bibendum bibendum nec eget sapien. </div>
		</div>
		<div class="image">
			<img src="images\avis 3.png" alt="Image 4">
				<div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget ante id velit bibendum bibendum nec eget sapien. </div>
		</div>
	</div>

<br><br><br><br>
<div class="container">
  <div class="bubbles">
    <div class="bubble-left">
      <img src="qui-sommes-nous.jpg" alt="Qui sommes nous">
      <div class="bubble-content">
        <h2>QUI SOMMES NOUS ?</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget ante id velit bibendum bibendum nec eget sapien. Donec malesuada, lorem sed molestie tincidunt, purus nibh vestibulum tellus, eu lacinia lorem lacus sit amet lectus. </p>
      </div>
    </div> <br><br>
    <div class="bubble-right">
      <img src="notre-concept.jpg" alt="Notre concept">
      <div class="bubble-content">
        <h2>NOTRE CONCEPT ?</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget ante id velit bibendum bibendum nec eget sapien. Donec malesuada, lorem sed molestie tincidunt, purus nibh vestibulum tellus, eu lacinia lorem lacus sit amet lectus. </p>
      </div>
    </div> <br><br>
    <div class="bubble-left">
      <img src="nos-partenaires.jpg" alt="Nos partenaires">
      <div class="bubble-content">
        <h2>NOS PARTENAIRES</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget ante id velit bibendum bibendum nec eget sapien. Donec malesuada, lorem sed molestie tincidunt, purus nibh vestibulum tellus, eu lacinia lorem lacus sit amet lectus. </p>
      </div>
    </div>
  </div>
</div> <br><br><br><br>

<?php require "template/footer.php" ?>
