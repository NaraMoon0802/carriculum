<?php
//UNIX タイムスタンプ 1970/1/1 0:00:00からの経過秒数
echo time();
echo "<br>";
var_dump(time());
echo "<br>";
echo date("Y-m-d H-i-s", time());
echo "<br>";
echo strtotime("2017/08/02 04:00:00");
echo "<br>";
echo date ("Y-m-d H-i-s", strtotime("+2day"));
?>