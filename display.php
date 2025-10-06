<?php
//    $name=$_POST["firstname"];
//    $surname=$_POST["lastname"];
//    echo "Ваше имя:".$name." фамилия ".$surname;

if(isset($_POST["x"])){
    $x= $_POST["x"];
    $y=sinh($x)*tan($x+1)-pow(tan(2+sinh($x-1)),2);
    printf("y=%.2f",$y);
}
