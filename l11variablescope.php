<?php

    // Variable Scope 
        // (i). Global Variable Scope 
        // (ii). Local Variable Scope 
        // (iii). Static Variable Scope 


    // (i). Global Variable Scope 

        // Example 1 
            $num1 = 100; // Global Variable 

            function funone(){
                echo "Global Variable print in function = $num1";// "Global Variable print in function
            }

            funone();

            echo "Global Variable print outside = ".$num1;// Global Variable print outside = 100

    // ----------------------------------------------------------------------------

    // (ii). Local Variable Scope 

        // Example 1 

            function funtwo(){
                $num2 = 200; // Local Variable
                echo "Local Variable print in function = $num2";
            }

            funtwo();

            echo "Local Variable print outside = $num2";// Local Variable print outside

    // ----------------------------------------------------------------------------

    // Example 2 ( global keywork )
            
            $num3 = 300;
            $num4 = 400;

            function funthree(){
                // global $num3;
                // global $num4;

                global $num3,$num4;
                global $result;

                $result = $num3+$num4;
                return "This is result , print by funthree = $result";// This is result , print by funthree = 700

            }

            echo funthree();

            echo "Local Variable print outside = $result";// Local Variable print outside

    // ----------------------------------------------------------------------------

    // (iii). Super Global Variable => ($GLOBALS)

            // Example 1 

                $num5 = 500;
                $num6 = 600;

                function funfour(){
                    
                    $GLOBALS["sum"] = $GLOBALS["num5"] +  $GLOBALS["num6"];

                    // return "This is result , print by funthree = $sum";// Undefined variable = sum

                }

                echo funfour();

                echo "Local Variable print outside = $sum";// Local Variable print outside = 1100

    // ----------------------------------------------------------------------------

    // Example 3 ( static keywork ) 
                
                $num7 = 700;

                function funfive(){
                    global $num7;

                    $num7++;
                    echo $num7;
                }

                funfive();// 701
                funfive();// 702
                funfive();// 703
                funfive();// 704

            // Example 3 

                $num8 = 800;

                function funsix(){
                    global $num8;

                    $num8++;
                    echo $num8;
                }

                funsix();// 801
                funsix();// 801
                funsix();// 801
                funsix();// 801

            // Example 4
                
                function funseven(){
                    static $num9 = 100;

                    $num9++;
                    echo $num9;
                }

                funseven();// 901
                funseven();// 902
                funseven();// 903
                funseven();// 904

    // ----------------------------------------------------------------------------

    // Passing by references (pr & )
        
        // Example 1 
            
            $num10 = 100;

            function funeight($num10){
                $num10 = 10000;
                echo $num10;
            }

            echo $num10; // 100
            funeight($num10);// 10000

            $num11 = 110;

            function funeight($num11){
                $num11 = 11000;
                echo $num11;
            }

            echo $num11; // 110
            funeight($num11);// 11000

        // Example 2 
            
            $name = "aung aung";

            function funten($val){
                $val = "su su";
                echo $val;
            }

            echo $name; // aung aung
            funten($val);// su su =  Undefined variable $val

            function funten(&$val){
                $val = "su su";
                echo $val;
            }

            echo $name; // aung aung
            funten($val);// su su 

            
    // ----------------------------------------------------------------------------

?>