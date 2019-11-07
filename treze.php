<html>
<head>
<meta charset = "utf-8">
<title>Exercício Treze</title>
</head>
<body>
<?php
echo "<h1>Esse código dividirá o número 50 por 10 até ser igual ou menos que 250.</h1>";
echo "<br>";

$valor = 50;
$divValor;

while ($divValor < 250)
$divValor = ($valor + 50) / 50;	
echo "=> ".$divValor; echo "<br>";
?>
</body>
</html>