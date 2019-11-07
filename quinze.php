<html>
<head>
<meta charset = "utf-8">
<title>Exercício Quinze</title>
</head>
<body>
<?php
echo "<h1>O código fará o decremento do número 80 até ele ser maior ou igual a 2.</h1>";
$var = 80;

while($var > 2)
{
	$var = $var - 2;
	echo "=> ".$var; echo "<br>";
}
?>
</body>
</html>