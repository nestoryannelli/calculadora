<?php
$valor1= $_POST['valor1']; //Declarando as variáveis 
$valor2= $_POST['valor2'];
$sinal = $_POST['sinal'];
$total =0;
switch ($sinal)

{
case '+': $total = $valor1 + $valor2; break; //estrutura condicional
case '-': $total = $valor1 - $valor2; break;
case '*': $total = $valor1 * $valor2; break;
case '/': $total = $valor1 / $valor2; break;
}
echo "O resultado é" .$total;

?>
