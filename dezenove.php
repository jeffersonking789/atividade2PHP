<html>
<head>
<meta charset = "utf-8">
<title>Exercício Dezenove</title>
</head>
<body>
<?php
$cont = 0;
$impar;
echo "<h1><center>Avaliará um intervalo de 1 a 200 e mostrará quantos números ímpares têm.</h1></center>";
echo "<br>";
echo "DATA: 12/09/2019";
echo "<br>";
echo "<hr>";
for($cont = 0; $cont <= 200; $cont++)
{
	echo $cont.", ";
		if($cont % 2 != 0)
		{
			$impar = $impar + 1;
		}
}				
echo "<br>";
echo "<hr>";
echo "No intervalo de 1 a 100, existem: ".$impar." números ÍMPARES.";
?>
</body>
</html>