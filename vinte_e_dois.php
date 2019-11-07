<html>
<head>
<meta charset = "utf-8">
<title>Exercício Vinte e Dois</title>
</head>
<body>
<?php
echo "<h1><center>Mostrará os números primos do intervalo de 1 a 200. DANDO ERRO</h1></center>";
echo "<br>";
echo "18/09/2019";
echo "<br>";
echo "<hr>";

$num;
$primo;

while($num <=200)
{
	if($num / 1 == $num)
	{
		echo "=> ".$num;
	}
	
	else if($num / $num == 1)
	{
		echo "=> ".$num;
	}
	
}
?>
</body>
</html>