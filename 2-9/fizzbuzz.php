<?php
$fizzbuzz = 1;
while ($fizzbuzz <= 100){
    if ($fizzbuzz%3 ==0){
        echo "Fizz!";
    }
    elseif ($fizzbuzz%5 == 0){
        echo "Buzz!";
    }
    elseif ($fizzbuzz%15 ==0){
        echo "FizzBuzz!";
    }
    else{
        echo $fizzbuzz;
    }
    $fizzbuzz ++;
    echo "<br>";
}
?>