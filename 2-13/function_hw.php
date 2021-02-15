<?php
echo ceil(5.7);//6
echo "<br>";
echo floor(5.7);//5
echo "<br>";
echo round(5.7);//6
echo "<br>";
echo pi();
echo "<br>";
$i = mt_rand(1, 100);
echo $i;
echo "<br>";
if ($i <=50){
    echo "LOSER";
}
else { echo "WINNER";}
echo "<br>";
//文字列
echo strlen("Yokohama");//8
echo "<br>";
echo strpos("Yokohama", "a");//5
echo "<br>";
echo substr("Yokohama", -4, 2);//"ha"
echo "<br>";
$message = "How are you?";
echo str_replace(" ", "", $message);//"Howareyou?
echo "<br>";

$location="海";
$month=8;
printf("%d月になったら%sに行きたい", $month, $location);
echo "<br>";
echo sprintf("%d月になったら%sに行きたい", $month, $location);
?>