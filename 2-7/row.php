<?php
$fruits = ["apple", "banana", "berry", "orange"];
echo $fruits[0];
echo "<br>";
$country = ["アメリカ"=>"America", "日本"=>"Japan", "韓国"=>"Korea"];
echo $country["韓国"];
echo "<br>";
var_dump($country);
echo "<bur>";
$country["イギリス"]="United Kingdom";
echo "<br>";
var_dump($country);
echo "<br>";
?>
<?php
//challenge!
$colors = ["red"=>"赤", "blue"=> "青", "green"=> "緑"];
var_dump($colors);
echo "<br>";
$colors["yellow"]="黄色";
var_dump($colors);
