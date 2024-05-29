<?php
$title = "supprimer stagiaire";
ob_start();
?>
<p>voulez vous vraiment supprimer un stagiaire!</p>
<a class="btn btn-danger" href="index.php?action=destroy&id=<?= $id?>">supprimer</a>
<a class="btn btn-secondary" href="index.php?action=liste">annuler</a>
<?php
$content = ob_get_clean();
  include_once 'view/layout.php';
?>