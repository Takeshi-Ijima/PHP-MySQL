<?php


    class ClassUser{
        public $name;

        public function __construct($name){
            $this->name = $name;
        }

        public function userName(){
            echo "こんにちは{$this->name}さん";
        }
    }
