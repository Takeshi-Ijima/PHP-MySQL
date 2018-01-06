<?php
    class CreateTable{
        const DB_HOST = 'localhost';
        const DB_NAME = 'pmt';
        const DB_USER = 'root';
        const DB_PASS = '';

        private $pdo = null;

        public function __construct(){
            $connect = sprintf("mysql:host=%s;dbname=%s", self::DB_HOST, self::DB_NAME);
            // sprintf(フォーマットを定義する文字列, [差し込む変数1, [差し込む変数2 ...]]);
            // %s は引数となって『self::DB_HOST, self::DB_NAME』を代入できる(複数可能)
            try{
                $this->pdo = new PDO($connect, self::DB_USER, self::DB_PASS);
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }

        public function __destruct(){
            $this->pdo = null;
        }

        public function sqlcreateTable(){
            $sql = <<<EOSQL
            create table if not exists task(
                task_id int auto_increment primary key,
                subject varchar(255) default null,
                start_date date default null,
                end_data date default null,
                description varchar(400) default null
            );
EOSQL;
            // if not existe 同じ名前のリレーションがすでに存在していてもエラーとしません。 この場合注意が発せられます。 既存のリレーションが作成しようとしたものと何かしら似たものであることは保証されません。
            return $this->pdo->exec($sql);
            //exec — 外部プログラムを実行する
        }

    }
 ?>
