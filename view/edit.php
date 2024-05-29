<?php
$title = "edit stagiaire";
ob_start();
?>
 <form action="index.php?action=update" method="post">
  <div class="mb-3">
    <!-- <label  class="form-label">id</label> -->
    <input name="id" type="hidden" class="form-control" value="<?= $stagiaire['id'];?>" >
  </div>
  <div class="mb-3">
    <label  class="form-label">nom</label>
    <input name="nom" type="text" class="form-control" value="<?= $stagiaire['nom'];?>" >
  </div>
  <div class="mb-3">
    <label  class="form-label">prenom</label>
    <input name="prenom" type="text" class="form-control" value="<?= $stagiaire['prenom'];?>" >
  </div>
  <div class="mb-3">
    <label  class="form-label">age</label>
    <input name="age" type="number" class="form-control" value="<?= $stagiaire['age'];?>" >
  </div>
  <div class="mb-3">
    <label  class="form-label">login</label>
    <input name="login" type="email" class="form-control" value="<?= $stagiaire['login'];?>" >
  </div>
  <div class="mb-3">
    <label  class="form-label">Password</label>
    <input name="password" type="password" class="form-control" value="<?= $stagiaire['password'];?>">
  </div>
 
  <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
  <input type="submit" value="modifier" name="modifier" class="btn btn-primary">
</form>
  <?php
  $content = ob_get_clean();
  include 'view/layout.php';
?>