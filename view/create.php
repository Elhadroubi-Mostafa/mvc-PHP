<?php
  $title = 'Ajouter stagiaire';
  
  ob_start();
  ?>
  <form action="index.php?action=store" method="post">
  <div class="mb-3">
    <label  class="form-label">nom</label>
    <input name="nom" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label  class="form-label">prenom</label>
    <input name="prenom" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label  class="form-label">age</label>
    <input name="age" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label  class="form-label">login</label>
    <input name="login" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label  class="form-label">Password</label>
    <input name="password" type="password" class="form-control" id="exampleInputPassword1">
  </div>
 
  <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
  <input type="submit" value="ajouter" name="ajouter" class="btn btn-primary">
</form>
  <?php
  $content = ob_get_clean();
  include 'view/layout.php';
?>