<?php
//ファイルへの書き込み
$testFile="test.txt";
$contents="こんにちは";

if (is_writable($testFile)){
    $fp= fopen($testFile, "w");//どの用途でファイルを開けるのかを示す（必須！！）
    //var_dump(fopen($testFile, "w"));→ resource型！！（外部のリソースを操作する）
    fwrite($fp, $contents);
    fclose($fp);
    echo "finish writing";
} else {
    echo "not writable";
    //exit; 処理の終了　いるのか？
}
echo "<br>";

//ファイルの読み込み
$test_file= "test_2.txt";
if (is_readable($test_file)){
    $fp = fopen($test_file, "r");
    while ($line= fgets($fp)/*読み込めなくなるまでという条件？*/){
        echo $line."<br>";
    }//fgets関数 ファイルを一行ずつ読み込む
    fclose($fp);
}

?>