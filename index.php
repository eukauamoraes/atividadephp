<?php
//exercicio 1
$nome = "kauã Moraes";
echo "$nome <br>";
?>
 
<?php
//exerciocio 2
$idade = 19;
echo "eu tenho $idade anos <br>";

?>

<?php
//exercico 3

$numero1 = 10;
$numero2 = 5;

echo -$numero1 . "<br>";
echo +$numero2 . "<br>";
echo "$numero1 + $numero2 = " . $numero1 + $numero2 . "<br>";
?>

<?php
//exercicio 4

$cidade = "São paulo";
$Pais = "Brasil";

echo "Eu moro em $cidade,$Pais <br>";

?>
<?php
//exercico 5
define("TAXA_JUROS", 0.005);

$capital = 1000;

$capital * TAXA_JUROS;
echo "O valor dos juros é de: " . ($capital * TAXA_JUROS) . "<br>";

?>
<?php

//exercicio 6

$temperatura = 25;

echo "A temperatura é de hoje $temperatura °C <br>";
?>
<?php
//exercico 7

$PrimeiroNome = "Kauã"; //variavel
$sobrenome = "Moraes"; //variavel
$nomecompleto = $PrimeiroNome . " " . $sobrenome; //concatenação

echo "Meu nome completo é $nomecompleto <br>";

?>

<?php
//exercio 8
define("PI", 3.14159);
$raio = 5;
$Area = PI * $raio * $raio;

echo "Area é igual a $Area <br>";

?>

<?php
//exercicio 9

$Produto = "Notebook";
$preco = 3500.00;

echo "O produto $Produto custa R$ $preco <br>";
?>

<?php
// exercicio 10
$nota1 = 5.5;
$nota2 = 7.0;
$nota3 = 8.0;


echo "A média das notas é: " . ($nota1 + $nota2 + $nota3) / 3 . "<br>";
?>