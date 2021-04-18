<?php
require_once("./getData.php");
//DBと接続
$first = new getData();
//ユーザー情報の取得
$latest = $first->getUserData();
//投稿データの取得
$data= $first->getPostData();


//出力画面にデータを渡す
require_once("./checktest4_html.php");

?>