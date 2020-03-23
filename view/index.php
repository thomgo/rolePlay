<!-- Include and other php file containing the html code for the header of the page -->
<?php include "template/header.php"; ?>

<!-- First section with the formulaire to enter character data -->
<section>
  <h2>Add a new character to your adventure</h2>
  <!-- Action is specified to avoid remaining arguments in the url after clicking on clear -->
  <form action="index.php" method="post">
    <label for="name">Your character's name (letters only) :</label><br>
    <input type="text" name="name" maxlength="50" pattern="[A-Za-z]+" required><br>
    <label for="name">Age (between 15 and 1000 years !) :</label><br>
    <input type="number" name="age" min="15" max="1000" required><br>
    <label for="name">Role type :</label><br>
    <select name="role" required>
      <option value="warrior">Warrior</option>
      <option value="archer">Archer</option>
      <option value="wizard">Wizard</option>
    </select><br>
    <label for="name">A short description (letters only):</label><br>
    <textarea name="description" rows="8" cols="80" maxlength="150" pattern="[A-Za-z]+" required></textarea>
    <br>
    <input type="submit" name="character_creation" value="Create">
  </form>
</section>

<!-- Second section displaying the characters stored in the session -->
<section>
  <h3>Your characters so far</h3>
  <span>
    <!-- An argument is passed in the url to trigger some action in the controller index.php -->
    <a href="index.php?action=clear">Clear</a>
  </span>
  <?php if (!empty($_SESSION["characters"])): ?>
    <?php foreach ($_SESSION["characters"] as $key => $character): ?>
      <article>
        <h4><?php echo $character->getName(); ?></h4>
        <span><?php echo $character->getRole(); ?></span>
      </article>
    <?php endforeach ?>
  <?php else: ?>
    <p>No characters have been created for now</p>
  <?php endif; ?>
</section>
<?php include "template/footer.php"; ?>
