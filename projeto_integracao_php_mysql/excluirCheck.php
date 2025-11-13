<?php 
  
    include("conexao.php");

    $id = $_GET['id'];
    
    $excluir = $pdo->prepare("delete from demo where id='$id'");
    $excluir->execute();

    header("location:kaline.php");

?>