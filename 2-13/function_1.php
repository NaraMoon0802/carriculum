<?php
$x =5.2;
echo ceil($x);//切り上げ
echo"<br>";
echo floor(6.2);
echo "<br>";
echo round(5.4);
echo "<br>";
echo pi();
echo "<br>";
function circleArea ($r){
    $circle_area = $r*$r*pi();
    print $circle_area;
}
circleArea (2);

echo "<br>";
echo mt_rand(1,100);//処理速度mt_rand > rand 
echo "<br>";
echo strlen("natsuki");//文字列の長さstring length?
echo "<br>";
echo strpos("natsuki", "u");//順番は0から始まる 文字列の特定の文字が何番目か
//string position?
echo "<br>";
echo substr("natsuki", -7, 2);
echo "<br>";
$str="I love you";
echo str_replace("I love", "She loves", $str);
echo "<br>";
echo str_replace(" ", "", $str);//I love you→ Iloveyou
//注意！！マルチバイト文字列＝日本語 mb_から始まる対応メソッドを使用する
echo "<br>";

$name="米山さん";
$limit_time=4;
printf("%sの残り時間はあと%02d時間です", $name, $limit_time);
//%記法 %s=string %d=data数値 %02d=2桁 %03d=3桁
echo "<br>";
echo $name."の残り時間はあと".$limit_time."時間です";
echo "<br>";
$notice = sprintf("%sの残り時間はあと%d時間です", $name, $limit_time);
echo $notice;//sprintf !=printf sprintfはフォーマット化するだけでechoが必要

?>