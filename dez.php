<html>
<head>
<meta charset="utf-8">
<title>Exercício Dez</title>
</head>
<body>
<?php
//o código mostrará o resultado de operações matemáticas utilizando o SWITCH.
$var1 = 5;
$var2 = 20;
$operacao = "-";

switch ($operacao)
{
case "+": echo "A soma é igual a: ".($var1+$var2);
break;
case "-": echo"A subtração é igual a: ".($var1-$var2);
break;
case "*": echo"A multiplicação é igual a: ".($var1*$var2);
break;
case "/": echo"A sivisão é igual a: ".($var1/$var2);
break;
}
?>
</body>
</html>