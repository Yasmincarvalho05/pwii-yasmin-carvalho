<?php 
$x = 5;
$y = 9;
$media = ($x + $y) / 2 ;
if ($x > $y) {
    echo "${x} é maior que ${y} <br>";
} else if ($x < $y) {
    echo "${x} é menor que ${y} <br>";
} else {
    echo "${x} é igual que ${y} <br>";
}

if ($media >= 6) {
    echo "Aluno aprovado";
} else if  ($media >= 4) {
    echo "Aluno em recuperação";
} else {
    echo "Aluno reprovado";
}

?>
