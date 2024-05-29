<?php
  
  function dataBase_connection(){
    $con = new PDO("mysql:host=localhost;dbname=ofppt", "root", "");
    return $con;
  }
  
  function liste_stagiaire(){
    $pdo = dataBase_connection();
    $stagiaires = $pdo->prepare("SELECT * FROM `stagiaire`");
    $stagiaires->execute();
    $fetch = $stagiaires->fetchAll(PDO::FETCH_ASSOC);
    return $fetch;
  }

  function create(){
    $pdo = dataBase_connection();
    $sql = $pdo->prepare("INSERT INTO `stagiaire`(nom, prenom, age, login, password) VALUES(:nom, :prenom, :age, :login, :password)");
    $sql->bindParam(':nom', $_POST['nom']);
    $sql->bindParam(':prenom', $_POST['prenom']);
    $sql->bindParam(':age', $_POST['age']);
    $sql->bindParam(':login', $_POST['login']);
    $sql->bindParam(':password', $_POST['password']);
    return $sql->execute();
  }

  function destroy($id){
    $pdo = dataBase_connection();
    $sql = $pdo->prepare("DELETE FROM `stagiaire` WHERE id =:id");
    $sql->bindParam(':id', $id);
    return $sql->execute();
  }

  function edit(){
    
  }

  function view($id){
    $pdo = dataBase_connection();
    $sql = $pdo->prepare("SELECT * FROM `stagiaire` WHERE id =:id");
    $sql->bindParam(':id', $id);
    $sql->execute();
    $stagiaire = $sql->fetch(PDO::FETCH_ASSOC);
    return $stagiaire;
  }

  function update(){
    $pdo = dataBase_connection();
    $sql = $pdo->prepare("UPDATE `stagiaire` SET nom =:nom, prenom =:prenom, age =:age, login =:login, password =:psw WHERE id =:id");
    $sql->bindParam(':nom', $_POST['nom']);
    $sql->bindParam(':prenom', $_POST['prenom']);
    $sql->bindParam(':age', $_POST['age']);
    $sql->bindParam(':login', $_POST['login']);
    $sql->bindParam(':psw', $_POST['password']);
    $sql->bindParam(':id', $_POST['id']);
    return $sql->execute();
  }
?>