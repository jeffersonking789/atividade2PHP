<html>
<head>
<meta charset = "utf-8">
<title>Exercício Dezessete</title>
</head>
<body>
<?php
$cont = 0;
$par;
echo "<h1><center>Avaliará um intervalo de 1 a 100 e mostrará quantos números pares têm.</h1></center>";
echo "<br>";
echo "DATA: 12/09/2019";
echo "<hr>";
for($cont = 0; $cont <= 100; $cont++)
{
	echo $cont.", ";
		if($cont % 2 == 0)
		{
			$par = $par + 1;
		}
}				
echo "<br>";
echo "<hr>";
echo "No intervalo de 1 a 100, existem: ".$par." números PARES.";	
?>
</body>
</html>