<?php

function factorial($n) {
    $result = 1;
    for ($i = 1; $i <= $n; $i++) {
        $result *= $i;
    }
    

echo "Factorial of $n is $result";
}
$n=$_GET['num'];
factorial($n);

?>