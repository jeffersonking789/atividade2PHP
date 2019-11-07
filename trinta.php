<!DOCTYPE HTML>
<html>
<head>
<title>Exercício 30</title>
</head>
<body>
<?php
echo "<h1><center>Avaliação de aluno</center></h1>";
echo "<br>";
echo "<hr>";

$aval = 4;

switch($aval)
{
    case "1": echo "1 - Situação: Frequente"; echo "<br>";
    echo "Aluno: Bernard Marx";
    break;

    case "2": echo "2 - Situação: Ausente"; echo "<br>";
    echo "Aluno: Arutha ConDoin";
    break;

    case "3": echo "3 - Situação: Falta Justificada"; echo "<br>";
    echo "Guy Montang";
    break;
    
    case "4": echo "4 - Situação: Evadido"; echo "<br>";
    echo "Aluno: Ninguém Owens";
    break;

    case "5": echo "5 - Situação: Desistente"; echo "<br>";
    echo "Aluno: Pug CoinDoin";
    break;

    default: echo "OPÇÃO INVÁLIDA";
    break;
}
?>
</body>
</html>