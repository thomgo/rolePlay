<?php include "template/header.php"; ?>
<section>
  <h2>Add a new character to your adventure</h2>
  <form action="" method="post">
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
  <article>
    <h4>Character's name</h4>
  </article>
</section>
<?php include "template/footer.php"; ?>
