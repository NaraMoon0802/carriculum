
<form action="result.php" method="post">
<?php//typeはinputされる処理の属性を示す?>
名前：<input type="text" name="my_name" />
<br>
<?php
//method属性がGET通信の場合
//→name属性は$_GET配列のキーとして格納され、入力内容が値。
//method属性がPOST通信の場合
//→name属性は$_POST配列のキー・・・?>
パスワード：<input type="password" name="password" />
<br>
<input type="submit" value="送信" />
</form>
