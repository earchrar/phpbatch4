<?php

    // User Define Function 

    // Regular Function 
        // Syntax
        // function name(){
        //     code to be executed;
        // }

    // Parameter Function (or) Arguments Function 
        // (i). Single Parameter Function 
        // (ii). Multi Parameter Function 

        // (i). Single Parameter Function 
            // function name($ag1){
            //     code to be executed;
            // }

        // (ii). Multi Parameter Function 
            // function name($ag1,$ag2){
            //     code to be executed;
            // }
        
    // Default Function (or) Default Argument Function 

        // function name($name="aung aung",$age=20){
        //     code to be executed;
        // }

    // Function Return 

    // Dynamic Function Call

    // --------------------------------------------------------------------

    // Regular Function

        // Example 1
            function funone(){
                echo "My name is mt.tin";
            }

            funone(); // invoke , callback
            funone();

        // Example 2
            function myfun1(){
                $num1 = 100;
                $num2 = 200;
                $cal = $num1+$num2;
                echo $cal;
            }

            myfun1();// 300

    // Parameter Function (or) Arguments Function 

        // (i). Single Parameter Function 
            // Example 1
                function singlefun($name){
                    echo "My name is $name";
                }

                singlefun("aung aung");
                singlefun("su su");

        // (ii). Multi Parameter Function 
           // Example 1 
                function multifun($name,$age){
                    echo "My name is $name and i am $age year old.";
                }

                multifun("aung aung",20);
                multifun("nandar",20);

    // Default Function (or) Default Argument Function 
        
        // Example 
            function defaultfun($name="hla hla"){
                echo "My name is $name";
            }

            defaultfun();

        // Example 
            function defaultfun1($num1=10,$num2=20,$num3=30){
                $cal =  $num1+$num2+$num3;
                echo $cal;
            }

            defaultfun1(); // 
            defaultfun1(50,10);
            defaultfun1(70,5,15);

    // --------------------------------------------------------------------

    // Return 

        // Example 1 
            function myreturn($num1){
                $cal = $num1+10;
                return $cal;
            }

            echo myreturn(10);// 20
        
        // Example 2
            function returnfun1($num1){
                return $cal = $num1+10;
            }

            echo returnfun1(100);// 110

        // Example 3
            function returnfun2($num1,$num2,$num3){
                $cal = $num1+$num2+$num3;
                return $cal;
            }

            echo returnfun2(10,20,30);// 60

        // Example 4
            function returnfun3($num1=10,$num2=20,$num3=30){
                $cal = $num1+$num2+$num3;
                return $cal;
            }

            echo returnfun3(50);// 100
            echo returnfun3();// 60

    // --------------------------------------------------------------------

    // Dynamic Function Call 

    // Simple Return Function 

        // Example 1
            function myreturn($num1){
                $cal = $num1+10;
                return $cal;
            }

            $dyn1 = myreturn(10);
            echo $dyn1;

        // Example 2 
            function returnfun1($num1){
                return $cal = $num1+10;
            }

            // Method 1
                $dyn2 = "returnfun1";
                echo $dyn2;
                echo $dyn2();// error 

            // Method 1
                $dyn2 = "returnfun1"; // Dynamic Function Call
                echo $dyn2; // returnfun1
                echo $dyn2(100);// 110 

            
            if(function_exists($myfun)){
                echo "Yes, your variable value is already in some kind of funciton";
            }else{
                echo "No";
            }

    // --------------------------------------------------------------------

            


?>