<?php
  $title = 'listes des stagiaires';
  
  ob_start();
  ?>
  <a href="index.php?action=create" class="btn btn-primary">Ajouter</a>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>id</th>
        <th>nom</th>
        <th>prenom</th>
        <th>age</th>
        <th>login</th>
        <th>action</th>
      </tr>
    </thead>
    <tbody>
      <?php
  foreach($fetch as $row){
      ?>
      <tr>
        <td><?= $row['id']?></td>
        <td><?= $row['nom']?></td>
        <td><?= $row['prenom']?></td>
        <td><?= $row['age']?></td>
        <td><?= $row['login']?></td>
        <td>
          <a href="index.php?action=edit&id=<?= $row['id']?>" class="btn btn-success btn-sm">edit</a>
          <a href="index.php?action=delete&id=<?= $row['id']?>" class="btn btn-danger btn-sm">supprimer</a>
        </td>
      </tr>
      <?php
  }
  ?>
    </tbody>
  </table>
  <?php
  $content = ob_get_clean();
  include 'view/layout.php';
?>