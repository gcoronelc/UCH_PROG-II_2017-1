<?php 

$n = rand(3, 8);

$f = 1;
for ($k = 1; $k <= $n; $k++)
{
    $f *= $k;
} 

echo("Factorial de $n es $f"); 

?>

