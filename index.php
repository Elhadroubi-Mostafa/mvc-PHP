<?php
  require_once 'controller/stagiaire_controller.php';
  // indexAction();
  // var_dump($_GET);
  if(isset($_GET['action'])){
    $action = $_GET['action'];
    switch($action){
      case "create" : createAction();
        break;
      case "delete" : deleteAction();
        break;
      case "destroy" : destroyAction();
        break;
      case "edit" : editAction();
        break;
      case "store" : storeAction();
        break;
      case "update" : updateAction();
        break;
      case "liste" : indexAction();
        break;
    }
  }
?>