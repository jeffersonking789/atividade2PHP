<html>
<head>
<meta charset="utf-8">
<title>Exercício Onze</title>
</head>
<body>
<?php
//o código mostrará o valor de duas variáveis, e se a variável 1 é menor que a 2, se for, será incrementado mais 1 a variável 1, senão for, será decrementado 1 da variável 2.
$var1 = 10;
$var2 = 11;
while ($var1 < $var2)
{
$var1 = $var1 + 1;
$var2 = $var2 - 1;
echo "A variável 1 é igual: ".$var1;
echo "<br>";
echo "A variável 2 é igual: ".$var2;
echo "<br>";
echo "<hr>";
}
?>
</body>
</html>