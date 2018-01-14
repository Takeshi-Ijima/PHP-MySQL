<?php
    require 'class.User.php';

    class User{
        public $name;
        // 以下はインスタンスの生成はできない
        // private $name;
        // protected $name;

        public static $count = 0;

        public function __construct($name){
            $this->name = $name;
            self::$count++;
        }
        public function sayHi(){
            echo "Hi.{$this->name}";
        }
        public static function hoge(){
            echo "::を使えばインスタンス必要なし";
        }
        // // 上書き禁止
        // final public function sayHi(){
        //     echo "Hi.{$this->name}";
        // }
    }

    class AdminUser extends User{
        public function sayHello(){
            echo "from AdminUser";
        }
        // オーバーライド
        public function sayHi(){
            echo "{$this->name}（）が上書きされた！";
        }
    }

    abstract class BaseUser{
        public $name;
        abstract public function sayHi();
    }

    class Users extends BaseUser{
        public function sayHi(){
            echo "hello BaseUser";
        }
    }



    $users = new ClassUser("hogehoge");
    // echo $users->name;
    $users->userName();


    // User::hoge();
    // $a = new User("f");
    // $a = new User("c");
    // echo User::$count;


    // $you = new AdminUser("you");
    // $user = new User("username");
    // $user = new AdminUser("username");
    // $user->sayHi();
    // echo $user->name;
    // echo $you->name;
    // $you->sayHi();
    // $you->sayHello();

    // $ke = new User("Kenji");
    // $ko = new User("Kosugi");
    // echo $ke->name;
    // $ke->sayHi();
    // echo $ko->name;
 ?>
