<?php

    // Comparision Operator 
        // == Equal
        // ===  Equal (Datatype)
        // != Not Equal or <> Not Equal 
        // !== (Datatype) 
        // > Greater than 
        // < Less than 
        // >= Greter than or Equal 
        // <= Less than or Equal 
        // ? ( Ternery Operator ? true : false )

        // Ternery Operator 
        // Syntax 
            // echo (stm1 comp stm2) ? true : false;

        $num1 = 10;
        $num2 = '10';

        echo $num1 == $num2 ? "your condition is true" : "your conditon is false"; // true
        echo $num1 === $num2 ? "your condition is true" : "your conditon is false"; // false

        echo $num1 != $num2 ? "your condition is true" : "your conditon is false";// false
        echo $num1 <> $num2 ? "your condition is true" : "your conditon is false";// false

        echo $num1 !== $num2 ? "your condition is true" : "your conditon is false";// true

        echo $num1 < $num2 ? "your condition is true" : "your conditon is false";// false
        echo $num1 <= $num2 ? "your condition is true" : "your conditon is false";// true

        echo $num1 > $num2 ? "your condition is true" : "your conditon is false";// false
        echo $num1 >= $num2 ? "your condition is true" : "your conditon is false";// true

?>