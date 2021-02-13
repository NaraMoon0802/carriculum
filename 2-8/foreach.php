<?php
$fruits = ["apple", "banana", "grape", "orange", "strawberry"];
foreach($fruits as $v){ //$valueに配列の中身が順番に入る
    echo $v;
    echo "<br>";
}//実質ループ文


$colors =["red"=>"赤", "blue"=>"青", "green"=> "緑"];
foreach ($colors as $k => $v){
    echo $k."=".$v;
    echo "<br>";
}
?>
<?php
//challenge!!
$fruits_1 = ["apple"=>"りんご", "orange"=>"みかん", "peach"=>"もも"];
foreach($fruits_1 as $k=>$v){
    echo $k."といったら".$v;
    echo "<br>";
}
?>