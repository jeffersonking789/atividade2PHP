<html>
<head>
<meta charset = "utf-8">
<title>Exercício Vinte e Um</title>
</head>
<body>
<?php
echo "<h1><center>Selecionará a estação de acordo com a escolha da pessoa.</h1></center>";
echo "<br>";
echo "18/09/2019";
echo "<br>";
echo "<hr>";

$estacao = 3;

echo "<center>";
switch($estacao)
{
	case "1": echo "OPÇÃO ESCOLHIDA FOI: ".$estacao;
	echo "<br>"; echo "<br>";
	echo "ESTAÇÃO: Primavera"; 
	echo "<br>"; echo "<br>";
	echo "DESCRIÇÃO: A primavera é a estação do ano que se segue ao Inverno e precede o verão. É tipicamente associada ao reflorescimento da flora terrestre. A primavera do hemisfério norte é chamada de 'primavera boreal' e a do hemisfério sul é chamada de 'primavera austral'.";
	break;
	
	case "2": echo "OPÇÃO ESCOLHIDA FOI: ".$estacao;
	echo "<br>"; echo "<br>";
	echo "ESTAÇÃO: Verão";
	echo "<br>"; echo "<br>";
	echo "DESCRIÇÃO: O verão é uma das quatro estações do ano, caracterizada por ser a estação mais quente. Neste período, as temperaturas permanecem elevadas e os dias são mais longos do que os dias de outras estações. Geralmente, o verão é também o período do ano reservado às férias.";
	break;
	
	case "3": echo "OPÇÃO ESCOLHIDA FOI: ".$estacao;
	echo "<br>"; echo "<br>";
	echo "ESTAÇÃO: Outono";
	echo "<br>"; echo "<br>";
	echo "DESCRIÇÃO: O outono é a estação do ano que sucede ao verão e antecede o inverno. É caraterizado por queda na temperatura, e pelo amarelar e início da queda das folhas das árvores, que indica a passagem de estações. O outono do hemisfério norte é chamado de 'outono boreal', e o do hemisfério sul é chamado de 'outono austral'.";
	break;
	
	case "4": echo "OPÇÃO ESCOLHIDA FOI: ".$estacao;
	echo "<br>"; echo "<br>";
	echo "ESTAÇÃO: Inverno";
	echo "<br>"; echo "<br>";
	echo "DESCRIÇÃO: O inverno é a estação mais fria das quatro estações do ano nos climas temperados. O inverno do hemisfério norte é chamado 'inverno boreal', e o do hemisfério sul é chamado de 'inverno austral'.";
	break;
	
	default: echo "OPÇÃO INVÁLIDA";
	break;
}
echo "</center>";
?>
</body>
</html>