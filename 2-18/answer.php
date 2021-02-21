<?php 
$name=$_POST["hidden_name"];
$number=$_POST["number"];
$language=$_POST["language"];
$command=$_POST["command"];
var_dump($_POST);
?>
<p><?php echo $name?>さんの結果は・・？</p>
<p>①の答え</p>
<?php
if ($number==80){
    echo "正解！";
}else echo "残念・・・";
?>
<p>②の答え</p>
<?php
if ($language=="HTML"){
    echo "正解！";
}else echo "残念・・・";
?>
<p>③の答え</p>
<?php
if ($command=="select"){
    echo "正解！";
}else echo "残念・・・";
?>