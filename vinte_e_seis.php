<!DOCTYPE HTML>
<html>
<head>
<title>Exercício 26</title>
</head>
<body>
<?php
echo "<h1><center>Incrementação de 2 variáveis até 50 a 100 respectivamente.</center></h1>";
echo "<br>";
echo "<hr>";

$a = 0;
$b = 0;

while($a <= 50)
{
    $a = $a + 1;
    echo "=> ".$a;
    echo "<br>";
}
echo "<hr>";
while($b <= 100)
{
    $b = $b + 1;
    echo "=> ".$b;
    echo "<br>";
}
?>
</body>
</html>