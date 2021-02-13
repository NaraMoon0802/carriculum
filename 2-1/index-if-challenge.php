<?php
//challenge!!
$name = "hana";
$pass = "123";
if ($name == "taro" && $pass != "pass"){
    echo "パスワードが間違っています";
}
elseif ($name != "taro" && $pass == "pass" ) {
    echo '名前が間違っています';
} elseif ($name != "taro" && $pass != "pass") {
    echo '入力情報が間違っています';
}
?>