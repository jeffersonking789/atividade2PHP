<html>
<head>
<meta charset = "utf-8">
<title>Exercício Vinte e Três</title>
</head>
<body>
<?php
echo "<h1><center>Escolha de mês e o aviso de quantos dias o mês tem.</h1></center>";
echo "<br>";
echo "18/09/2019";
echo "<br>";
echo "<hr>";

$mes = 3;

switch ($mes)
{
	case "1": echo "<h2><center>Mês escolhido: ";
	echo "<br>";
	echo "Janeiro - Têm 31 dias.</h2></center>";
	break;
	
	case "2": echo "<h2><center>Mês escolhido: ";
	echo "<br>";
	echo "Fevereiro - Têm 28 dias.</h2></center>";
	break;
	
	case "3": echo "<h2><center>Mês escolhido: ";
	echo "<br>";
	echo "Março - Têm 31 dias.</h2></center>";
	break;
	
	case "4": echo "<h2><center>Mês escolhido: ";
	echo "<br>";
	echo "Abril - Têm 30 dias.</h2></center>";
	break;
	
	case "5": echo "<h2><center>Mês escolhido: ";
	echo "<br>";
	echo "Maio - Têm 31 dias.</h2></center>";
	break;
	
	case "6": echo "<h2><center>Mês escolhido: ";
	echo "<br>";
	echo "Junho - Têm 30 dias.</h2></center>";
	break;
	
	case "7": echo "<h2><center>Mês escolhido: ";
	echo "<br>";
	echo "Julho - Têm 31 dias.</h2></center>";
	break;
	
	case "8": echo "<h2><center>Mês escolhido: ";
	echo "<br>";
	echo "Agosto - Têm 31 dias.</h2></center>";
	break;
	
	case "9": echo "<h2><center>Mês escolhido: ";
	echo "<br>";
	echo "Setembro - Têm 30 dias.</h2></center>";
	break;
	
	case "10": echo "<h2><center>Mês escolhido: ";
	echo "<br>";
	echo "Outubro - Têm 31 dias.</h2></center>";
	break;
	
	case "11": echo "<h2><center>Mês escolhido: ";
	echo "<br>";
	echo "Novembro - Têm 30 dias.</h2></center>";
	break;
	
	case "12": echo "<h2><center>Mês escolhido: ";
	echo "<br>";
	echo "Dezembro - Têm 31 dias.</h2></center>";
	break;
	
	default: echo "<h1><center>OPÇÃO INVALÍDA</h1></center>";
	break;
}
?>
</body>
</html>