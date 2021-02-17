<?php
$fizzbuzz = 1;
while ($fizzbuzz <= 100){
    if ($fizzbuzz%5==0 && $fizzbuzz%3==0){
        echo "FizzBuzz!";
    }
    elseif ($fizzbuzz%3 ==0){
        echo "Fizz!";
    }
    elseif ($fizzbuzz%5 ==0){
        echo "Buzz!";
    }
    
    else{
        echo $fizzbuzz;
    }
    $fizzbuzz ++;
    echo "<br>";
}
?>