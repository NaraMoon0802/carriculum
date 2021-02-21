<?php
$name=$_POST["name"];
$number=[80, 22, 20, 21];
$language=["PHP", "Python", "JAVA", "HTML"];
$command=["join", "select", "insert", "update"];
?>
<link rel="stylesheet" href="question.css">
<div class="wrapper">
<p>お疲れ様です<?php echo $name?>さん</p>

<form action="answer.php" method="post">
<h2>①ネットワークのポート番号は何番？</h2>
<?php foreach ($number as $vn){?>
    <input type="radio" name="number" value = <?php $vn ?>/><?php echo $vn ?>
<?php } ?>
<h2>②Webページを作成するための言語は？</h2>
<?php foreach ($language as $vl){?>
    <input type="radio" name="language" value =<?php $vl ?>/><?php echo $vl ?>
<?php }?>
<h2>③MySQLで情報を取得するためのコマンドは？</h2>
<?php foreach ($command as $vc){?>
<input type="radio" name="command" value = <?php $vc ?>/><?php echo $vc?>
<?php }?>
<br>
<input type="submit" value="回答する">
<input type="hidden" name="hidden_name" value= "Natsuki">
</form>
</div>