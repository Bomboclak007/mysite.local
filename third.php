<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Лабораторная работа №3</title>
    <link rel="stylesheet" href="styles.css">
</head>
<!--<body>-->
<!--    <p>Cоздать массив из n чисел, каждый элемент которого-->
<!--        равен квадрату своего номера</p>-->
<!--    <form method="post">-->
<!--<!--        <p>Введите число элементов массива:<label>-->-->
<!--<!--                <input type="number" name="n"/>-->-->
<!--<!--            </label>-->-->
<!--<!--        </p>-->-->
<!--        <table>-->
<!--            <tr>-->
<!--                <th>1</th>-->
<!--                <th>2</th>-->
<!--                <th>3</th>-->
<!--            </tr>-->
<!--            <tr>-->
<!--                <td><label>-->
<!--                        <input type="number" name="r1" placeholder="Удельное сопротивление 1"/>-->
<!--                    </label></td>-->
<!--                <td><label>-->
<!--                        <input type="number" name="r2" placeholder="Удельное сопротивление 2"/>-->
<!--                    </label></td>-->
<!--                <td><label>-->
<!--                        <input type="number" name="r3" placeholder="Удельное сопротивление 3"/>-->
<!--                    </label></td>-->
<!--            </tr>-->
<!--            <tr>-->
<!--                <td><label>-->
<!--                        <input type="number" name="l1" placeholder="Длина 1"/>-->
<!--                    </label></td>-->
<!--                <td><label>-->
<!--                        <input type="number" name="l2" placeholder="Длина 2"/>-->
<!--                    </label></td>-->
<!--                <td><label>-->
<!--                        <input type="number" name="l3" placeholder="Длина 3"/>-->
<!--                    </label></td>-->
<!--            </tr>-->
<!--            <tr>-->
<!--                <td><label>-->
<!--                        <input type="number" name="s1" placeholder="Площадь 1"/>-->
<!--                    </label></td>-->
<!--                <td><label>-->
<!--                        <input type="number" name="s2" placeholder="Площадь 2"/>-->
<!--                    </label></td>-->
<!--                <td><label>-->
<!--                        <input type="number" name="s3" placeholder="Площадь 3"/>-->
<!--                    </label></td>-->
<!--            </tr>-->
<!--            <tr>-->
<!--                <td>-->
<!--                    --><?php
//                        if(isset($_POST['r1'])&&isset($_POST['l1'])&&isset($_POST['s1'])){
//                            $r1 = $_POST['r1'];
//                            $l1 = $_POST['l1'];
//                            $s1 = $_POST['s1'];
//                            global $R1;
//                            $R1=Resistance($r1,$l1,$s1);
//                            echo $R1." Ом";
//                        }
//                    ?>
<!--                </td>-->
<!--                <td>-->
<!--                    --><?php
//                    if(isset($_POST['r2'])&&isset($_POST['l2'])&&isset($_POST['s2'])){
//                        $r2 = $_POST['r2'];
//                        $l2 = $_POST['l2'];
//                        $s2 = $_POST['s2'];
//                        global $R2;
//                        $R2=Resistance($r2,$l2,$s2);
//                        echo $R2." Ом";
//                    }
//                    ?>
<!--                </td>-->
<!--                <td>-->
<!--                    --><?php
//                    if(isset($_POST['r3'])&&isset($_POST['l3'])&&isset($_POST['s3'])){
//                        $r3 = $_POST['r3'];
//                        $l3 = $_POST['l3'];
//                        $s3 = $_POST['s3'];
//                        global $R3;
//                        $R3=Resistance($r3,$l3,$s3);
//                        echo $R3." Ом";
//                    }
//                    ?>
<!--                </td>-->
<!--            </tr>-->
<!--        </table>-->
<!--        <p>-->
<!--            <input type="submit" value="Отправить">-->
<!--        </p>-->
<!--        --><?php
//            $max1=Max($GLOBALS["R1"],$GLOBALS["R2"]);
//            $max=Max($max1,$GLOBALS["R3"]);
//            echo "Максимальное сопротивление ".$max." Ом";
//        ?>
<!--    </form>-->
<!--    --><?php
////        if(isset($_POST["n"])){
////            $n = $_POST["n"];
////            $numbers=[];
////            for($i = 0; $i < $n; $i++){
////                $numbers[$i]=$i*$i;
////            }
////            print_r($numbers);
////        }
////    if(isset($_POST["n"])){
////        $n = $_POST["n"];
////        echo "Сумма чисел от 1 до ".$n." равна ".Sum($n)."<br>";
////    }
//    function Resistance($r,$l,$s)
//    {
//        return $r*$l/$s;
//    }
//    function Sum($a)
//    {
//        $sum = 0;
//        for ($i = 1; $i <= $a; $i++) {
//            $sum += $i;
//        }
//        return $sum;
//    }
//    function Hello()
//    {
//        echo "Hello world!";
//    }
//    //Hello();
//
//    ?>
<!--</body>-->
</html>