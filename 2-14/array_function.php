<?php
$countries =["Japan","Korea", "China", "America", "Russia", "UK", "France", "Germany", "Italy"];
echo count($countries);//9
echo "<br>";
var_dump(sort($countries));//sort()の戻り値は論理値(true or false)→bool(true)
echo "<br>";
var_dump($countries);//アルファベット順の結果
//array(9){[0]=>string(7) "America" ........}
echo "<br>";
var_dump(in_array("China", $countries));//配列に対象が入っているかどうか
//bool(true)
echo "<br>";
if (in_array("Korea", $countries)/*==true*/){
    echo "韓国に行こう！";
}else {
    echo "ほかの国に行こう！";
}
echo "<br>";
$connect_c= implode("@", $countries);
echo $connect_c;
echo "<br>";
var_dump($connect_c);
echo "<br>";
var_dump(explode("@", $connect_c));//配列にechoは使えないよ！
echo "<br>";
$sum="1+2+3+4";
var_dump(explode("+", $sum));
echo "<br>";



?>