<?php 
  
    include("conexao.php");

    $name = $_POST['name'];
    $idade = $_POST['idade'];
    $cpf = $_POST['cpf'];
    $endereco = $_POST['endereco'];
    $celular = $_POST['celular'];
    $email = $_POST['email'];
    

    $inserir = $pdo->prepare("insert into demo (name,idade,cpf,endereco,celular,email)
                     values ('$name', '$idade', '$cpf', '$endereco', '$celular', '$email')");
    $inserir->execute();

    header("location:kaline.php");


?>