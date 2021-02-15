<form action = "result.php" method="post">
    私の名前：<input type = "text" name="my_name"/>
    <br>
    パスワード：<input type="password" name="password"/>
    <?php//入力された内容が配列の値valueになる?>
    <br>
    性別：<input type="radio" name="sex" value="男性" disabled/>男性<input type="radio" name="sex" value="女性" disabled/>女性
    <?php//nameはキーでvalueで定められたものが配列の値になる?>
    <br><?php //disabledは対象のフォームへの操作をできなくする。（
    //これはvalueが固定されていることが原因であるが、valueは送信されないので代わりにhidden属性で送る。?>
    <input type="hidden" name="hidden_param" value="男性" />    
    <input type="submit" value="送信するよ！">
    <br>
    <?php
    //readonlyとdisabledの違い
    //readonly はtype="text"のみ使用可でvalueは送信される。（あらかじめ設定しておく）?>
    <select name="age">
      <?php for ($i=1;$i<=10;$i++){ ?>
        <option value="<?php echo $i; ?>">
          <?php echo $i; ?>
        </option>
      <?php } ?>


    </select>
</form>
