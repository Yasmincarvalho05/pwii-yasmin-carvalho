<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BD</title>
</head>

<?php 
  //session_start(); 
  include("conexao.php");
?>

<body>
    <form action="inserirCheck.php" method="post">
        <fieldset>
            <legend>Banco de Dados</legend>
            
            <div class="name">
                <label for="email">Nome</label>
                <input type="text" name="name">
            </div>

            <div class="idade">
                <label for="idade">Idade</label>
                <input type="text" name="idade">
            </div>

            <div class="cpf">
                <label for="cpf">CPF</label>
                <input type="text" name="cpf">
            </div>

            <div class="endereco">
                <label for="endereco">Endereço</label>
                <input type="text" name="endereco">
            </div>

            <div class="celular">
                <label for="celular">Celular</label>
                <input type="text" name="celular">
            </div>

            <div class="email">
                <label for="email">E-mail</label>
                <input type="text" name="email">
            </div>

            <br>
            <div class="submit">
                <input type="submit" name="submit" class="btn btn-primary" value="Salvar">
            </div>
            
        </fieldset>
    </form>
</body>
</html>