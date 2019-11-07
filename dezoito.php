<html>
<head>
<meta charset = "utf-8">
<title>Exercício Dezoito</title>
</head>
<body>
<?php
echo "<h1><center>Escolha de mês</h1></center>";
echo "<br>";
echo "DATA: 12/09/2019";
echo "<hr>";

$mes = 4;

switch ($mes)
{
	case "1": echo "<h2><center>Mês escolhido: ";
	echo "<br>";
	echo "Janeiro</h2></center>";
	break;
	
	case "2": echo "<h2><center>Mês escolhido: ";
	echo "<br>";
	echo "Fevereiro</h2></center>";
	break;
	
	case "3": echo "<h2><center>Mês escolhido: ";
	echo "<br>";
	echo "Março</h2></center>";
	break;
	
	case "4": echo "<h2><center>Mês escolhido: ";
	echo "<br>";
	echo "Abril</h2></center>";
	break;
	
	case "5": echo "<h2><center>Mês escolhido: ";
	echo "<br>";
	echo "Maio</h2></center>";
	break;
	
	case "6": echo "<h2><center>Mês escolhido: ";
	echo "<br>";
	echo "Junho</h2></center>";
	break;
	
	case "7": echo "<h2><center>Mês escolhido: ";
	echo "<br>";
	echo "Julho</h2></center>";
	break;
	
	case "8": echo "<h2><center>Mês escolhido: ";
	echo "<br>";
	echo "Agosto</h2></center>";
	break;
	
	case "9": echo "<h2><center>Mês escolhido: ";
	echo "<br>";
	echo "Setembro</h2></center>";
	break;
	
	case "10": echo "<h2><center>Mês escolhido: ";
	echo "<br>";
	echo "Outubro</h2></center>";
	break;
	
	case "11": echo "<h2><center>Mês escolhido: ";
	echo "<br>";
	echo "Novembro</h2></center>";
	break;
	
	case "12": echo "<h2><center>Mês escolhido: ";
	echo "<br>";
	echo "Dezembro</h2></center>";
	break;
	
	default: echo "<h1><center>OPÇÃO INVÁLIDA</h1></center>";
	break;
}