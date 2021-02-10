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
var_dump($message1); //var_dumpは()の変数の型と長さ、数を示すメソッド。
var_dump($x);
var_dump($y);
echo '<br>';

$frag = true;
var_dump($frag); 
// 対象が真偽値(true or false)なので示す型はbool（booleanの略）

$emp = null;
var_dump($emp);
?>

<?php
echo "<br>";
define("ADMIN_EMAIL"/*第一引数で定数名*/, "y-group@gmail.com"/*第二引数で定数*/);
echo ADMIN_EMAIL; //定義するときは文字列指定。呼び出す時は定数名だけ
//主にDB操作とかで役に立つよ！
?>

