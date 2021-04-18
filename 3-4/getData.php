<?php
require_once("pdo.php");

class getData{

    public $pdo;
    public $data;

    //コンストラクタ
    function __construct()  {
        $this->pdo = connect();
    }

    /**
     * ユーザ情報の取得
     *
     * @param 
     * @return array $users_data ユーザ情報
     */
    public function getUserData(){
        $getusers_sql = "SELECT * FROM users limit 1";//最新の記事のみを選択する
        $users_data = $this->pdo->query($getusers_sql)->fetch(PDO::FETCH_ASSOC);
        return $users_data;
    }
    
    /**
     * 記事情報の取得
     *
     * @param 
     * @return array $post_data 記事情報
     */
    public function getPostData(){
        $getposts_sql = "SELECT id, title, category_name, comment, created FROM posts JOIN category ON category. category_no = posts. category_no ORDER BY id desc;";
        $stmt= $this->pdo->prepare($getposts_sql);
        $res= $stmt->execute();
        if ($res !== false){
            $post_data = [];
            while ($result = $stmt->fetch(PDO::FETCH_ASSOC)){
                array_push($post_data, $result);
            }
        }
        return $post_data;
    }
}
?>