<?php
$i= 3;
$fibo1 = 0;
$fibo2 = 1;

echo $fibo1 . ", " . $fibo2 . ", ";

for ($i = 3; $i <=100; $i++){
    $fibo3 = $fibo1 + $fibo2;
    $fibo1 = $fibo2;
    $fibo2 = $fibo3;
    echo $fibo3 . ", ";
}

?>