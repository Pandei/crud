<?php

require 'config.php';

$usuario = [];
$id = filter_input(INPUT_GET, 'id');

if($id){
    $sql = $pdo->prepare("SELECT * FROM usuario WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();


    if($sql->rowCount() > 0) {
        $usuario = $sql->fetch(PDO::FETCH_ASSOC);
        //die('tem');
    } else {
       // die('n tem');
        header("Location: index.php");
        exit;
    } 
    } else {
        header("Location: index.php");
    }

?>

<h1>Editar Usuário</h1>
<form method="POST" action="editar_action.php">
    <input type="hidden" name="id" value="<?=$usuario['id'];?>"/>
    <label>
        Nome: <input type="text" name="nome" value="<?=$usuario['nome'];?>"/>
    </label>
    <br><br>
    <label>
        E-mail: <input type="email" name="email" value="<?=$usuario['email'];?>"/>
    </label>
    <br><br>
    <input type="submit" value="Atualizar"/>
</form>
