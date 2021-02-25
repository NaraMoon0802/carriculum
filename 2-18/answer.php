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
function result1($n){
    if ($n==80){
        echo "正解！";
    }else echo "残念・・・";
}
result1($number);

?></p>
<p>②の答え</p>
<p>
<?php
function result2($l){
    if ($l=="HTML"){
        echo "正解！";
    }else echo "残念・・・";
}
result2($language);

?></p>
<p>③の答え</p>
<p>
<?php
function result3($c){
    if ($c=="select"){
        echo "正解！";
    }else echo "残念・・・";
}
result3($command);

?></p>
</div>
</body>