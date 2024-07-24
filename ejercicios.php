<?php
function generarFibonacci($n)
{
    $fibonacci = [0,1];
    for ($i=2; $i<=$n;$i++)
    {
        $fibonacci[]=$fibonacci[$i-1]+$fibonacci[$i-2];
    
    }
    echo $fibonacci[$n];
}
generarFibonacci(10);
$numero =13;
if(esPrimo($numero)){
    echo '<br>Es primo';
}else{
    echo '<br>No es primo';
}
function esPrimo($numero)
{
    if (!is_numeric($numero))
    return false;;
for ($i=2; $i<$numero; $i++)
{
    if(($numero % $i)==0){
        return false;
    }
}
return true;
}

function esPalindromo($palabra)
{
    $minusculas = explode(" ", strtolower($palabra));
    $nuevo="";
    foreach($minusculas as $m)
    {
        trim($m);
        $nuevo .= $m;
    }
    if($nuevo ==strrev($nuevo))
    {
        return "<br>Es palindromo";
    }
    else{
        return "No es palindromo";
    }
}
$palabra="reconocer";
echo esPalindromo($palabra);
?>