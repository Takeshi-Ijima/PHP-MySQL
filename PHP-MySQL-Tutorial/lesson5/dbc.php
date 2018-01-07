<?php
    class UpdateDate{
        const DB_HOST = 'localhost';
        const DB_NAME = 'pmt';
        const DB_USER = 'root';
        const DB_PASS = '';

        private $pdo = null;

        public function __construct(){
            $dbc = sprintf("mysql:host=%s;dbname=%s", self::DB_HOST, self::DB_NAME);
            try{
                $this->pdo = new PDO($dbc, self::DB_USER, self::DB_PASS);
                // echo "接続成功";
            }catch(PDOException $e){
                die("エラー：" . $e->getMessage());

            }
        }

        public function update($id, $subject, $description, $startDate, $endDate){
            $task = [
                ':taskid' => $id,
                ':subject' => $subject,
                ':description' => $description,
                ':start_date' => $startDate,
                ':end_date' => $endDate
            ];
            $sql = "update tasks
                set
                    subject = :subject,
                    start_date = :start_date,
                    end_date = :end_date,
                    description = :description
                where task_id = :taskid
            ";

            $q = $this->pdo->prepare($sql);
            return $q->execute($task);
        }

        public function __destruct(){
            $this->pdo = null;
        }
    }
 ?>
