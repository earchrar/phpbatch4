<?php

    // Arithematic Operator 
        // Addition (+) 
        // Substraction (-)
        // Multiplication (*)
        // Division (/)
        // Modulue (%)

    $num1 = 100;
    $num2 = 200;
    $num3 = 30.28;
    $city = "Mawlamyine";
    $myarr = ["maung maung","kyaw kyaw"];
    $color = array("red","green","blue");
    
    echo $num1; // 100
    echo $num2; // 200
    echo $num1+$num2; // 300
    echo $num1-$num2; // -100
    echo $num2-$num1;// 100
    echo $num1*$num2;// 20000
    echo $num2%$num1;// 0
    echo $num2/$num1;// 2

    echo $myarr; // Array to string conversion
    echo $color; // Array to string conversion

    var_dump($num1);// int(100)
    var_dump($num2);// int(200)
    var_dump($num3);// float(30.28)
    var_dump($city);// string(10) "Mawlamyine"
    var_dump($myarr);// array(2) { [0]=> string(11) "maung maung" [1]=> string(9) "kyaw kyaw" }
    var_dump($color);// array(3) { [0]=> string(3) "red" [1]=> string(5) "green" [2]=> string(4) "blue" }

    $num4 = true;
    $num5 = "10";
    $num6 = '20';

    var_dump($num5,$num6);// string 
    echo $num5+$num6; // 30
    echo $num6-$num5;// 10
    echo $num4+$num5;// 11
    var_dump($num5+$num6); // int 

    // => Overwrite / Override 
    $num5 = 50;
    $num6 = '60';
    
    var_dump($num5,$num6); // int(50) and string(2) "60"
    echo $num5+$num6;// 110

?>

<!-- 
    L3arithematicoperator.php
    => Arithematic Operator 
        (+,-,*,/,%)
        eg. $num1 = 10; $num2 = 20;
            echo $num1+$num2; // 30
            echo $num1-$num2; // -10
            echo $num2-$num1; // 10
            echo $num2*$num1; // 200
            echo $num1/$num2; // 0.5
            echo $num1%$num2; // 10

    => Data type Js (typeof()) / python (type()) / php (var_dump())
        // array use data type 
        // var_dump()

    => Overwrite / Override 
        => var_dump(string+string) => string(datatype)
        => echo (string+string) => calculate

            
-->