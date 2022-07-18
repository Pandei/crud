<?php

require 'config.php';


$lista = [];
$sql = $pdo->query("SELECT * FROM usuario");

if($sql->rowCount() > 0){
    $lista= $sql->fetchAll(PDO::FETCH_ASSOC);
}

?>


<table border="1">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>EMAIL</th>
        <th>AÇÕES</th>
    </tr>
    <?php foreach($lista as $usuario): ?>
        <tr>
        <td><?=$usuario['id'];?></td>
        <td><?=$usuario['nome'];?></td>
        <td><?=$usuario['email'];?></td>
        <td>
            <a href="editar.php?id=<?=$usuario['id'];?>">| Editar |</a>
            <a href="deletar.php?id=<?=$usuario['id'];?>">| Excluir |</a>
        </td>
    </tr>
    <?php endforeach;?>
</table>
<br>
<a href="cadastrar.php">Cadastrar Usuario</a>