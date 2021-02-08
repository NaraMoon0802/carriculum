<?php
//PHPの研修カリキュラム2-1
?>
<?php
echo "PHPの研修";?>
<html>
<p>I say that <?php echo "Hello!!"; ?> </p>
</html>

<?php
// index.php
$message = "Hello World!"; //$は変数の前に絶対必要です。
echo $message;
echo '<br>'; 
//HTMLの<br>を呼び出すことでブラウザのインターフェイスを
//構成するHTMLを修正する感じになる。→<br>は''で文字列扱い？
$x = 8;
$y = 5.55;
echo $x;
echo '<br>';
echo $y;
echo '<br>';

$message1 = "Good night";
var_dump($message1);
var_dump($x);
var_dump($y);
?>