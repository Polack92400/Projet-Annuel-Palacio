<link href="styles.css" rel="stylesheet"/>

<?php include "template/header.php"; ?>
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
    width: 500px;
    height: 200px;
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
  <div class="bubbles">
    <div class="bubble-left">
      <div class="image">
        <img src="images\logo noir.jpg" alt="Qui sommes nous">
      </div>
      <div class="bubble-content">
        <h2>Location seule</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget ante id velit bibendum bibendum nec eget sapien. Donec malesuada, lorem sed molestie tincidunt, purus nibh vestibulum tellus, eu lacinia lorem lacus sit amet lectus. </p>
      </div>
    </div> <br><br><br><br>
    <div class="bubble-right">
      <div class="image">
        <img src="images\deco.jpg" alt="Notre concept">
      </div>
      <div class="bubble-content">
        <h2>Décoration</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget ante id velit bibendum bibendum nec eget sapien. Donec malesuada, lorem sed molestie tincidunt, purus nibh vestibulum tellus, eu lacinia lorem lacus sit amet lectus. </p>
      </div>
    </div> <br><br><br><br>
    <div class="bubble-left">
      <div class="image">
        <img src="images\traiteur-mariage.jpeg" alt="Nos partenaires">
      </div>
      <div class="bubble-content">
        <h2>Traiteur</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget ante id velit bibendum bibendum nec eget sapien. Donec malesuada, lorem sed molestie tincidunt, purus nibh vestibulum tellus, eu lacinia lorem lacus sit amet lectus. </p>
      </div>
    </div><br><br><br><br>
    <div class="bubble-right">
      <div class="image">
        <img src="images\DJ.jpg" alt="Notre concept">
      </div>
      <div class="bubble-content">
        <h2>DJ</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget ante id velit bibendum bibendum nec eget sapien.
      </div>
    </div> <br><br><br><br>
    <div class="bubble-left">
    <div class="image">	
      <img src="images\dakka.jpeg" alt="Nos partenaires">
      </div>
      <div class="bubble-content">
        <h2>Animations</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget ante id velit bibendum bibendum nec eget sapien. Donec malesuada, lorem sed molestie tincidunt, purus nibh vestibulum tellus, eu lacinia lorem lacus sit amet lectus. </p>
      </div>
    </div>
  </div>
</div> <br><br><br><br>

<?php require "template/footer.php" ?>
