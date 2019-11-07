<html>
<head>
<meta charset = "utf-8">
<title>Exercício Quatorze</title>
</head>
<body>
<?php
echo "<h1>Esse código fará o incremente de uma variável de valor 02 até que o valor seja igual ou menor que 80.</h1>";
echo "<br>";

$var = 2;
while ($var <80)
{
	$var = $var + 2;
	echo "=> ".$var; echo "<br>";
}	
?>
</body>
</html>