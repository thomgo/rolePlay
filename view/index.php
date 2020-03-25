<!-- Include and other php file containing the html code for the header of the page -->
<?php include "template/header.php"; ?>

<!-- First section with the formulaire to enter character data -->
<section id="form_section">
  <h2>Add a new character to your adventure</h2>
  <?php if (!empty($instance_error)): ?>
    <div class="alert-danger">
      <p><?php echo "Your data is unvalid : " . $instance_error; ?></p>
    </div>
  <?php endif; ?>
  <!-- Action is specified to avoid remaining arguments in the url after clicking on clear -->
  <form action="index.php" method="post">
    <label for="name">Your character's name (letters only) :</label><br>
    <input type="text" name="name" maxlength="50" pattern="[A-Za-z ]+" required><br>
    <label for="name">Age (between 15 and 1000 years !) :</label><br>
    <input type="number" name="age" min="15" max="1000" required><br>
    <label for="name">Role type :</label><br>
    <select name="role" required>
      <option value="warrior">Warrior</option>
      <option value="archer">Archer</option>
      <option value="wizard">Wizard</option>
    </select><br>
    <label for="name">A short description (letters only):</label><br>
    <textarea name="description" rows="4" maxlength="150" required></textarea>
    <br>
    <input type="submit" name="character_creation" value="Create">
  </form>
</section>

<!-- Second section displaying the characters stored in the session -->
<section id="characters_section">
  <h3>Your characters so far</h3>
  <span>
    <!-- An argument is passed in the url to trigger some action in the controller index.php -->
    <a class="btn" href="index.php?action=clear">Clear</a>
  </span>
  <div>
    <?php if (!empty($_SESSION["characters"])): ?>
      <?php foreach ($_SESSION["characters"] as $key => $character): ?>
        <article>
          <h4><?php echo $character->getName(); ?></h4>
          <span><?php echo $character->getRole(); ?></span>
          <span><?php echo $character->getLife() . "LP"; ?></span>
          <span><?php echo $character->getAge() . "years" ?></span>
          <p><?php echo $character->getDescription(); ?></p>
        </article>
      <?php endforeach ?>
    <?php else: ?>
      <p>No characters have been created for now</p>
    <?php endif; ?>
  </div>
</section>
<?php include "template/footer.php"; ?>
