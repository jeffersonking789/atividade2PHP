<html>
<head>
<meta charset="utf-8">
<title>Exercício Nove</title>
</head>
<body>
<?php
//o código mostrará se o A é maior que B e C.
$a=0;
$b=2;
$c=1;
echo "Variável A: ".$a;
echo "<br>";
echo "Variável B: ".$b;
echo "<br>";
echo "Variável C: ".$c;
echo "<br>";
echo "<hr>";

if ($a>$b && $a>$c)
{
echo "Variável A: ".$a." é maior que B e C";
}

if  ($b>$a && $b>$c)
{
echo "Variável B: ".$b." é maior que A e C";
}

if ($c>$a && $c>$b)
{
echo "Variável C: ".$c." é maior que A e B";
}
?>
</body>
</html>