<?php
$age=18;
if ($age<=20){echo "お酒が飲めるぞ！";}
else {echo "お酒は二十歳になってから！";}
echo "<br>";
//論理値の条件分岐
$is_student=false; //代入演算子
if ($is_student/*==trueはなくてもよい*/){
    echo "学生です";}
    else {echo "社会人です";}
echo "<br>";
//複数条件の条件分岐
$age = 22;
$is_student = true;

if ($age < 25 && $is_student){
    echo "学割使えるよ";
}
echo "<br>";
$is_student = false;
if ($age < 25 != $is_student){
    echo "学割は使えないよ";
}
echo "<br>";
//&&, ||, != は論理演算子　==, <=, >=, <, >, !=は比較演算子　=は代入演算子

//switch文＝if elseif
$blood = "B";
if ($blood == "B"){
    echo "B型です";
}
elseif ($blood == "A"){
    echo "A型です";
}
else {
    echo "A/B/O/ABから選択してください";
}
echo "<br>";
//これと同じ処理
switch ($blood){
    case "A";
    print "A型です";
    break;
    case "B";
    print "B型です";
    //break; もしbreak;がないと条件が一致した以降の処理がすべて行われる
    //現状だと"B型ですO型ですAB型です"と表示される。
    case "o";
    print "O型です";
    //break;
    case "AB";
    print "AB型です";
    //break;
    default;
    echo "A/B/O/ABから選択してください";
}
echo "<br>";
//三項演算子
$name = "";
if ($name != ""/*空文字ではない場合・・・*/){
    echo "名前を受け付けました";
}
else {
    echo "名前を入力してください";
}
echo "<br>";
//→同様の処理を三項演算子で行う
$name = "";
echo ($name != "") ? "名前を受け付けました" : "名前を入力してください";

//型まで比較する場合
$string = "1";
$int = 1;
if ($string === 1){
    echo "変数stringは数字である";
}
else {
    echo "変数stringは文字列である";　/*$から始まる変数は文字列にはなれない */
}

?>