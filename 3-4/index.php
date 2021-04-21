<?php
require_once("./getData.php");
//DBと接続
$first = new getData();
//ユーザー情報の取得
$latest = $first->getUserData();
//投稿データの取得
$post_data = $first->getPostData();
$data = [];
while ($result= $post_data->fetch(PDO::FETCH_ASSOC)){
    array_push($data, $result);
}

//出力画面にデータを渡す
require_once("./checktest4_html.php");

?>