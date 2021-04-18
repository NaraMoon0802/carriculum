

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>一覧</title>
    <style>
        .clearfix::after{
            content: "";
            display: block;
            clear: both;
        }
        .wrapper{
            width: 1000px;
        }
        img{
            float:left;
            width: 200px;
            height: 120px;
            background-color: #add8e6;
        }
        .header_up{
            float: left;
            width: 800px;
            height: 60px;
            background-color: #87ceeb;
            text-align: right;
        }
        .header_down{
            float: left;
            width: 800px;
            height: 60px;
            background-color: #00ffff;
            text-align: right;
        }
        p{
            line-height: 60px;
        }
        table{
            margin: 0 auto;
            padding-top: 10px;
            margin-bottom : 10px;
            
        }
        th{
            background-color: #87ceeb;
        }
        td{
            background-color: #e0ffff;
        }
        
        .footer{
            width: 1000px;
            height: 50px;
            background-color: #00ced1;
        }
    </style>
</head>
<div class="wrapper">
    <div class = "header">
        <img src="./logo1.png" alt="">
        <div class="header_up"><p>ようこそ<?php echo $latest["last_name"].$latest["first_name"];?>さん</p></div>
        <div class="header_down clearfix"><p>最終ログイン日：<?php echo $latest["last_login"];?></p></div>
    </div>
    <table>
        <tr><th>記事ID</th><th>タイトル</th><th>カテゴリ</th><th>本文</th><th>投稿日</th></tr>
        <?php
        
        foreach ($data as $key=>$value){
            echo "<tr><td>".$value["id"]."</td><td>".$value["title"]."</td><td>".$value["category_name"]."</td><td>".$value["comment"]."</td><td>".$value["created"]."</td><tr>";
        }
        ?>
    </table>
    
    <div class="footer">Y&I group.inc</div>

</div>
<body>
    
</body>
</html>