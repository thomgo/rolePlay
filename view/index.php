<?php include "template/header.php"; ?>
<section>
  <h2>Add a new character to your adventure</h2>
  <form action="index.php" method="post">
    <label for="name">Your character's name :</label><br>
    <input type="text" name="name" value=""><br>
    <label for="name">Age :</label><br>
    <input type="number" name="age" value=""><br>
    <label for="name">Role type :</label><br>
    <select name="role">
      <option value="warrior">Warrior</option>
      <option value="archer">Archer</option>
      <option value="wizard">Wizard</option>
    </select><br>
    <label for="name">A short description :</label><br>
    <textarea name="description" rows="8" cols="80"></textarea>
    <br>
    <input type="submit" name="character_creation" value="Create">
  </form>
</section>
<section>
  <h3>Your characters so far</h3>
  <span>
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
