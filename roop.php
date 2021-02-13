<?php
//roop 
//while文 限界なしの繰り返し
$num = 0;
//while ($num < 10){
    //echo $num;    }
 //条件式の評価がtrueである限り処理を繰り返す。
//→　0000000000000000000000000000000000000000000000000・・・・延々と
echo "<br>";
$num = 0;
while ($num < 10){
    echo $num;
    $num += 2;
}
echo "<br>";
//do while
$num = 0;
do {
    echo $num;
    $num ++;
}while ($num <10); // 条件式の評価が最後であるため$num == 0の場合は無条件に処理が行われる

echo "<br>";
//for 
for ($i=0;/*初期化式 */ $i<10;/*条件式*/ $i ++/*変化式*/){
    echo $i;
}
echo "<br>";
//途中で終了させるbreak
$num = 0;
while ($num < 10){
    echo $num;
    $num ++;
    if ($num ==5){
        break;
    }
}
echo "<br>";
//challenge!
$number = 0;
while ($number <= 100){
    echo $number;
    echo "<br>";
    $number ++;
}

for ($number=0; $number <= 100; $number ++){
    echo $number;
    echo "<br>";
}
?>