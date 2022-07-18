<?php

require 'config.php';

$usuario = [];
$id = filter_input(INPUT_GET, 'id');

if($id){
    $sql = $pdo->prepare("DELETE FROM usuario WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();


    //if($sql->rowCount() > 0) {
        $usuario = $sql->fetch(PDO::FETCH_ASSOC);
        //die('tem');
   // } else {
       // die('n tem');
        header("Location: index.php");
        exit;
   // } 
  //  } else {
   //     header("Location: index.php");
   }

?>