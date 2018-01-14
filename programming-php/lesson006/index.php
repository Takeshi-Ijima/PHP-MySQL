<?php
    class HTML{
        static function startTable(){
            echo "<table>";
        }
        static function endTable(){
            echo "</table>";
        }
    }
    // HTML::startTable();
    // echo "<thead><th>斎藤<th><th>谷口<th><th>野々村<th></thead>";
    // HTML::endTable();

    class Person{
        public $age;
        public function __construct(){
            $this->age = 0;
        }
        public function incrementAge(){
            $this->age += 1;
            $this->ageChanged();
        }
        protected function decrementAge(){
            $this->age -= 1;
            $this->ageChanged();
        }
        private function ageCanged(){
            echo "年齢が{$this->age}歳になりました。";
        }
    }
    class SuperPerson extends Person{
        public function incrementAge(){
            $this->decrementAge();
        }
    }
    $person = new Person;
    $person->incrementAge(1);


 ?>
