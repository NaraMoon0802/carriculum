<?php 
$name=$_POST["hidden_name"];
$number=$_POST["number"];
$language=$_POST["language"];
$command=$_POST["command"];
?>
<head>
<link rel="stylesheet" href="answer.css">
</head>
<body>
<div class="wrapper">
<p><?php echo $name?>さんの結果は・・？</p>
<p>①の答え</p>
<p>
<?php
if ($number==80){
    echo "正解！";
}else echo "残念・・・";
?></p>
<p>②の答え</p>
<p>
<?php
if ($language=="HTML"){
    echo "正解！";
}else echo "残念・・・";
?></p>
<p>③の答え</p>
<p>
<?php
if ($command=="select"){
    echo "正解！";
}else echo "残念・・・";
?></p>
</div>
</body>