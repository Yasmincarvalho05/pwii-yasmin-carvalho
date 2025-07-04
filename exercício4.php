<?php
$valorProduto = 200;
$valorTotal = $valorProduto * 1.16;
$parcela = $valorTotal / 10;
echo "Valor total da compra: R$ " . number_format($valorTotal, 2, ',', '.') . "<br>";
echo "Valor de cada parcela: R$ " . number_format($parcela, 2, ',', '.') . "<br>";
?>
