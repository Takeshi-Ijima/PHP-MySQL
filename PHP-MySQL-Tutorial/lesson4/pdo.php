<?php
    class InsertDate{
        const DB_HOST = 'localhost';
        const DB_NAME = 'pmt';
        const DB_USER = 'root';
        const DB_PASS = '';

        private $pdo = null;

        public function __construct(){
            $con = sprintf("mysql:host=%s;dbname=%s", self::DB_HOST, self::DB_NAME);

            try{
                $this->pdo = new PDO($con, self::DB_USER, self::DB_PASS);
            }catch(PDOException $e){
                die("接続失敗：" . $e->getMessage());
            }
        }

        public function Insert(){
            $sql = "insert into tasks(
                subject,
                start_date,
                end_date,
                description
                ) value (
                    'PHPとMySQLの接続について',
                    '2018-01-07',
                    '2018-01-07',
                    'ここではデータベースに追加する方法が理解できます。'
                    )";
            return $this->pdo->exec($sql);
        }
    }
 ?>
