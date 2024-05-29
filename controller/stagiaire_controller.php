<?php
require_once 'model/stagiaire.php';

function indexAction(){
  $fetch = liste_stagiaire();
  require_once 'view/liste_stagiaire.php';
}

function createAction(){
  require_once 'view/create.php';
}

function storeAction(){
    var_dump($_POST);
    $isCreated = create();
    // var_dump($isCreated);
    header('location: index.php?action=liste');
}

function destroyAction(){
  $id = $_GET['id'];
  destroy($id);
  header('location: index.php?action=liste');
}

function editAction(){
  $id = $_GET['id'];
  $stagiaire = view($id);
  require_once 'view/edit.php';
}

function deleteAction(){
  $id = $_GET['id'];
  require_once 'view/delete.php';
}

function updateAction(){
  update();
  header('location: index.php?action=liste');
}
?>