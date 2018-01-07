<?php
    class DaleteDate{
        const DB_HOST = 'localhost';
        const DB_NAME = 'pmt';
        const DB_USER = 'root';
        const DB_PASS = '';

        private $pdo = null;

        public function __construct(){
            $connect = sprintf("mysql:host=%s;dbname=%s", self::DB_HOST, self::DB_NAME);
            try{
                $this->pdo = new PDO($connect, self::DB_USER, self::DB_PASS);
            }catch(PDOException $e){
                die("エラー" . $e->getMessage());
            }
        }

        //テーブル内のレコード全てを削除するメソッド
        public function truncateTable(){
            $sql = 'TRUNCATE TABLE task';
            return $this->pdo->exec($sql);
        }

        //テーブル内のレコード全てを削除するメソッド
        public function deleteAll(){
            $sql = "delete from task";
            return $this->pdo->exec($sql);
        }

        //idを指定して列を削除するメソッド
        public function deleteId($id){
            $sql = "delete from tasks where task_id =  :task_id";
            $q = $this->pdo->prepare($sql);
            return $q->execute([':task_id' => $id]);
        }

        //データベースの接続を切る
        public function __destruct(){
            $this->pdo = null;
        }
    }

    //以下メッソドの呼び出し
    $delete = new DaleteDate();
    // $delete->deleteId(3);
    // $delete->deleteAll();
    $delete->truncateTable();
