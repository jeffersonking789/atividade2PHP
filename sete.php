<html>
<head>
<meta charset="utf-8"/>
<title>Exercício Sete</title>
</head>
<body>
<?php
echo "<hr>";
echo "Esse código mostrará à sequência de números de 1 a 10 e a soma dos números.";
echo "<br>";

$cont = 0;
$soma = 0;
while ($cont < 10)
{
$cont = $cont + 1;
echo $cont;
echo "<br>";
$soma = $soma + $cont;
}
echo "<br>";

echo "SOMA: ".$soma;
echo "<hr>";
?>

</body>
</html>