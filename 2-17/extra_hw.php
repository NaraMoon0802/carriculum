<?php
$sum=0;
for ($i=1; $sum<=40; $i++){
    $result=rand(1,6);
    echo $i."回目=".$result;
    echo "<br>";
    $sum += $result;
}
$answer = $i-1;
echo "合計".$answer."回でゴールしました";
echo "<br>";
?>

<?php
$hour=date("H", time());

echo "今".$hour."時台です";
echo "<br>";
if ($hour>=05 && $hour<12){
    echo "おはようございます";
}elseif ($hour>=12 && $hour<17){
    echo "こんにちは";
}else {
    echo "こんばんは";
}
echo "<br>";

//$hourの時間が文字列だった場合
$hour ="15";
echo "今".$hour."時台です";
echo "<br>";
$i_hour = intval($hour);
if ($i_hour>=05 && $i_hour<12){
    echo "おはようございます";
}elseif ($i_hour>=12 && $i_hour<17){
    echo "こんにちは";
}else {
    echo "こんばんは";
}
?>