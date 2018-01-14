<?php
    $length = strlen("PHP");
    // echo $length;

    function inhtml(){
        ?>
        <h1>PHP関数</h1>
        <?php
    }
    // inhtml();

    function FullName($fname, $lname){
        return $fname . $lname;
    }
    $fname = "小峰";
    $lname = "周平";

    // echo fullname($fname, $lname);



 ?>
