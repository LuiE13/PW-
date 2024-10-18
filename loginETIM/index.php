<?php
session_start();

if( isset( $_SESSION['nome'])){
    $nome = $_SESSION['nome'];
    echo "Bem vindo a nosa pagina $nome";
}else{
    header("location:login.php");
    
}