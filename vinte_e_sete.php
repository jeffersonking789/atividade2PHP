<!DOCTYPE HTML>
<html>
<head>
<title>Exercício 27</title>
</head>
<body>
<?php
echo "<h1><center>Decrementação do número 150 até 0.</center></h1>";
echo "<br>";
echo "<hr>";

$a = 150;

while($a >= 0)
{
    $a = $a - 3;
    echo "=> ".$a;
    echo "<br>";
}
?>
</body>
</html>