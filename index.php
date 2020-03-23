<?php
require "model/character.php";

// Start the sessions
session_start();

// If the user has clicked on clear then we delete all the characters that are stored in session
if (isset($_GET["action"]) && $_GET["action"]=="clear") {
  $_SESSION["characters"] = [];
}

// If the character creation form has been submitted then proceed
// We could use !empty($_POST) instead but with isset we make sure this is not antoher form submitted
if (isset($_POST['character_creation'])) {
  // Instanciate a character object with the form data
  $character = new Character($_POST);
  // Store the character in an array in session at index "characters"
  $_SESSION["characters"][] = $character;
}

require "view/index.php";
