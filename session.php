<?php
session_start();
$login_mestre = "joaopedroang";
$senha_mestre = "123456789";
$login = $_POST['login'];
$senha = $_POST['senha'];

if($login == $login_mestre && $senha == $senha_mestre) {
    
    header("location:area_restrita.php");
} else {
    header("location:inicial.php");
}
?>