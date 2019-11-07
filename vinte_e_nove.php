<!DOCTYPE HTML>
<html>
<head>
<title>Exercício 29</title>
</head>
<body>
<?php
echo "<h1><center>Escolha de mês e dia</center></h1>";
echo "<br>";
echo "<hr>";

$mes = 3;

switch($mes)
{
    case "1": echo "<h2><center>Mês escolhido: ";
	echo "<br>";
	echo "Janeiro - 30 dias - Dia da Fraternidade Universal</h2></center>";
	break;
	
	case "2": echo "<h2><center>Mês escolhido: ";
	echo "<br>";
	echo "Fevereiro - 28 dias - Dia do Surdo-Mudo</h2></center>";
	break;
	
	case "3": echo "<h2><center>Mês escolhido: ";
	echo "<br>";
	echo "Março - 31 dias - Dia Mundial da Água</h2></center>";
	break;
	
	case "4": echo "<h2><center>Mês escolhido: ";
	echo "<br>";
	echo "Abril - 30 dias - Dia de São Pio V</h2></center>";
	break;
	
	case "5": echo "<h2><center>Mês escolhido: ";
	echo "<br>";
	echo "Maio - 31 dias - Dia Mundial sem Tabaco</h2></center>";
	break;
	
	case "6": echo "<h2><center>Mês escolhido: ";
	echo "<br>";
	echo "Junho - 30 dias - Dia Internacional dos Asteróides</h2></center>";
	break;
	
	case "7": echo "<h2><center>Mês escolhido: ";
	echo "<br>";
	echo "Julho - 31 dias - Dia Mundial do Orgasmo</h2></center>";
    break;

    case "8": echo "<h2><center>Mês escolhido: ";
	echo "<br>";
	echo "Agosto - 31 dias - Dia das Estrelas do Amanhã</h2></center>";
    break;

    case "9": echo "<h2><center>Mês escolhido: ";
	echo "<br>";
	echo "Setembro - 30 dias - Dia Internacional da Tradução</h2></center>";
    break;

    case "10": echo "<h2><center>Mês escolhido: ";
	echo "<br>";
	echo "Outubro - 31 dias - Dia da Reforma Luterana</h2></center>";
    break;

    case "11": echo "<h2><center>Mês escolhido: ";
	echo "<br>";
	echo "Novembro - 30 dias - Dia de Santo André</h2></center>";
    break;
    
    case "12": echo "<h2><center>Mês escolhido: ";
	echo "<br>";
	echo "Dezembro - 31 dias - Dia de Natal</h2></center>";
    break;

    default: echo "<h2><center>OPÇÃO INVÁLIDA</center></h2>";
    break;
}
?>
</body>
</html>