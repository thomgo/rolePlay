<?php
require "model/character.php";

// If the character creation form has been submitted then proceed
// We could use !empty($_POST) instead but with isset we make sure this is not antoher form submitted
if (isset($_POST['character_creation'])) {
  // Instanciate a character object with the form data
  $character = new Character($_POST);
  var_dump($character);
}

require "view/index.php";
