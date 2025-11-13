<?php 
    //session_start(); 
    include("conexao.php");
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <h1><center>Consulta dos dados</center></h1>
    <br>
    <div class="containder">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <?php
                if (isset($_SESSION['status'])) {
                    echo "<h4>" . $_SESSION['status'] . "</h4>";
                    unset($_SESSION['status']);
                }
                ?>

                
                <div class="card-mt-5">
                    <div class="card-header">
                       <?php // apaga isso
                      // <h4> Cheklist quiosque</h4> 
                        // apaga isso ?> 
                    </div>
                    <div class="card-body">
 <div class="card-mt-5">
                    

            

       <section>

            <table class="table table-striped">
                <tr>
                    
                    <th>Nome</th>
                    <th>Idade</th>
                    <th>CPF</th>
                    <th>Endereço</th>
                    <th>Celular</th>
                    <th>E-mail</th>
                    
                   
                    
                    

                    <th> &nbsp; </th>                    
                </tr>
                
                  
                <?php
                    $consulta = $pdo->prepare("SELECT * from demo;");
                    $consulta->execute();

                   while ($linha = $consulta->fetch(PDO::FETCH_BOTH)) {
                        
                        echo "<tr>";
                                                  //  echo "<td>" . $linha["hora"] . "</td>";
                                                    echo "<td>" . $linha["name"] . "</td>";      
                                                    echo "<td>" . $linha["idade"] . "</td>";   
                                                    echo "<td>" . $linha["cpf"] . "</td>";
                                                    echo "<td>" . $linha["endereco"] . "</td>";      
                                                    echo "<td>" . $linha["celular"] . "</td>";   
                                                    echo "<td>" . $linha["email"] . "</td>"; 
                                                   
                        echo "<td>"; 

                                echo "<a href=excluirCheck.php?id=$linha[0]> Excluir </a>";
                            echo "</td>";
                        echo "</tr>"    ;                       

                   }
                ?>


            </table>

            <div class="card-header">

                        <h6 align="right"> CINETIME | TELEFONE: (11)5555-5555</h6>

                    </div>
                    <div class="card-body">

                </section>
        <section>

          

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
            crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.1.js"
            integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
</body>

</html>