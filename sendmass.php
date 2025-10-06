<?php
    if(isset($_POST["users"])){
        $first=strip_tags($_POST["users"]["first"]);
        $second=strip_tags($_POST["users"]["second"]);
        $third=strip_tags($_POST["users"]["third"]);
        echo "first:".$first." second:".$second." third:".$third."<br>";
    }