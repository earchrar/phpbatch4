<?php

    // => if Statement 

    $x = 10;
    $y = 20;

    if($x > $y){
        echo "Your condition is yes"; // empty
    }

    if($x < $y){
        echo "Your condition is yes"; // working
    }

    // => if else
    
    if($x > $y){
        echo "Yes , x greater than"; // empty
    }else{
        echo "No , y less than"; // working
    }

    // => Short Hand 
    if($x > $y) echo "Yes, x greater than"; else echo "No, y less than";

    $color = "red";
    $colorvalue = $color;

    echo $color; # gray
    print $color; # gray

    if($colorvalue == "red"){
        echo "My fav color is red";
    }else{
        echo "I hate red color";
    }

    if($colorvalue == "red"){
        echo "My fav color is $color";
    }else{
        echo "I hate red color";
    }

    // Logical Operator
    // (&& And) (|| OR) (! NOT)

    $a = 100;
    $b = 200;
    $c = 300;

    if($a < $b && $a > $c){
        echo "it is true";
    }else{
        echo "it is false";
    }

    if($a < $b || $a < $c){
        echo "it is true";
    }else{
        echo "it is false";
    }

    if($a < $b || $b > $c){
        echo "it is true";
    }else{
        echo "it is false";
    }

        // true   ||   false &&   false
            // true                false    guess = false   result = true
    if($a < $b || $b > $c&& $a > $c){
        echo "it is true";
    }else{
        echo "it is false";
    }

        // true   ||   false &&   false
            // true                false    guess = false   result = false
    if(( $a < $b || $b > $c ) && $a > $c){
        echo "it is true";
    }else{
        echo "it is false";
    }

    if(!($a < $b)){
        echo "it is true";
    }else{
        echo "it is false";
    }    

    // => if else if() else
    if($b > $c){
        echo "it is true";
    }else if($b == 200){
        echo "it is equal";
    }else{
        echo "it is false";
    }

    if($b > $c) echo "it is true"; else if($b == 200) echo "it is equal"; else echo "it is false";

    if($b > $c)
        echo "it is true";
    else if($b == 200)
        echo "it is equal";
    else
        echo "it is false";

    // Switch Statment 
    // Syntax 
    // switch(condition){
    //     case stm1:
    //         code to be executed;
    //     case stm2:
    //         code to be executed;
    //     default: 
    //         code to be executed;
    // }

    $phone = "iphone";

    switch($phone){
        case "sony":
            echo "i can't buy sony phone";
            break;
        case "iphone":
            echo "i hate apple products";
            break;
        case "mi":
            echo "oki , i can buy";
            break;
        case "samsung":
            echo "my fav mobile phone is samsung";
            break;
        default:
            echo "i love keypad";
    }



?>