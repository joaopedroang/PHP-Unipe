<?php
$nome = $_POST['nome'];
$idade = $_POST['idade'];

setcookie("user_nome", $nome, time() + 900, );
setcookie("user_idade", $idade, time() + 900);

header("location:dados.php");
?>