<html>
<head>
<meta charset = "utf-8">
<title>Exercício Vinte e Quatro</title>
</head>
<body>
<?php
echo "<h1><center>Escolha de mês e o aviso de quantos dias o mês tem.</h1></center>";
echo "<br>";
echo "18/09/2019";
echo "<br>";
echo "<hr>";

$sinal = 2;

echo "<center>";
switch ($sinal)
{
	case "1": echo "Escolha de sinal foi: ".$sinal;
	echo "<br>";echo "<br>";
	echo "Sinal: Vermelho";
	echo "<br>";echo "<br>";
	echo "Instrução: Parar no sinal vermelho";
	break;
	
	case "2": echo "Escolha de sinal foi: ".$sinal;
	echo "<br>";echo "<br>";
	echo "Sinal: Amarelo";
	echo "<br>";echo "<br>";
	echo "Instrução: Diminuir velocidade";
	break;
	
	case "3": echo "Escolha de sinal foi: ".$sinal;
	echo "<br>";echo "<br>";
	echo "Sinal: Verde";
	echo "<br>";echo "<br>";
	echo "Instrução: Motorista pode avançar";
	break;
	
	default: echo "<h1><center>OPÇÃO INVALÍDA</h1></center>";
	break;
}
echo "</center>";
?>
</body>
</html>