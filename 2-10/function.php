<?php
echo 10*5*1/2;
echo "<br>";
echo 15*8/2;
echo "<br>";
//関数を使おう
//関数を定義する
function getTriangleArea/*関数名は自由に決められる*/($base, $height/*引数 */){
    $area = $base*$height/2;
    print "三角形の面積は".$area."だよ"; //echoとの違いは何？
}
getTriangleArea(5,8);
echo "<br>";
function sayHi($name="goto"){
    $myname="php";
    return "Hi!".$name."from".$myname;
    //returnは戻り値を得るだけで、echoのような出力ではないよ
}
echo sayHi();//関数の引数の初期値を変える必要がなければ空欄でOK
echo "<br>";

$code = "Ruby";
function programming ($level = "初心者"){
    $code = "PHP";
    print $level."は".$code."を学ぶべきだ";
}
programming();
echo "<br>";
echo $code;//"Ruby"
//関数の外の変数指定は関数内には影響しない
//逆に関数内の変数はローカル変数であり、関数の外に影響しない
?>