<?php 

    // => Check Variable Types 

        // => is_string() 
        // => is_numeric() / is_int() / is_integer() 
        // => is_float() 
        // => is_bool() 
        // => is_array()
        // => is_null() 
        // => empty() vs isset() 
        // => isset() vs unset()

        // => Data types 
                // echo gettype();
            // Array to string 
                // var_dump();
                // echo "<pre>".print_r()"</pre>";
                // printf ();
        
    //=> is_string(variable) Function

        $val1 = "Save Myanmar";
        echo "val1 is ". is_string($val1); // 1
        echo var_dump($val1);// string(12)
        echo gettype($val1);// string

        $val2 = 0;
        echo "val2 is ".is_string($val2);// 0

        $val3 = 50;
        echo "val3 is ".is_string($val3);// 0

        $val4 = "50";
        echo "val4 is ".is_string($val4);// 1 

        $val5 = "";
        echo "val5 is ".is_string($val5); // 1

        $val6 = true;
        echo "val6 is ".is_string($val6); // 0

    // is_numeric(variable) Function 

        $val7 = 50;
        echo "val7 is ".is_numeric($val7);// 1
        echo "val7 is ".is_int($val7);// 1
        echo "val7 is ".is_integer($val7);// 1
        echo gettype($val1);// integer

        $val8 = 34.56;
        echo "val8 is ".is_numeric($val8);// 1
        echo "val8 is ".is_int($val8);// 0
        echo "val8 is ".is_integer($val8);// 0

        $val9 = "50";
        echo "val9 is ".is_numeric($val9);// 1
        echo "val9 is ".is_int($val9);// 0
        echo "val9 is ".is_integer($val9);// 0

    // is_float(variable) Function 

        $val10 = 40;
        echo "val10 is ".is_float($val10);// 0

        $val11 = 34.56;
        echo "val11 is ".is_float($val11);// 1
        echo gettype($val11);// double

        $val12 = "34.56";
        echo "val12 is ".is_float($val12);// 1

    // is_bool(variable) Function 

        $val13 = true;
        echo "val13 is ".is_bool($val13);// 1
        echo gettype($val13);// boolean

        $val14 = false;
        echo "val14 is ".is_float($val14);// 0

        $val15 = 1;
        echo "val15 is ".is_float($val15);// 0

        $val16 = "true";
        echo "val16 is ".is_float($val16);// 0

    // is_array(variable) Function 

        $val17 = "Help Myanmar";
        echo "val17 is ".is_array($val17);// 0

        $val18 = ["aung aung","su su"];
        echo "val18 is ".is_array($val18);// 1
        echo gettype($val18);// array

    // is_null(variable) Function 

        $val19 = 0;
        echo "val19 is ".is_null($val19);// 0

        $val20 = null;
        echo "val20 is ".is_null($val20);// 1
        echo gettype($val20);// null

        $val21 = Null;
        echo "val21 is ".is_null($val21);// 1

        $val22 = NULL;
        echo "val22 is ".is_null($val22);// 1

        $val23 = "null";
        echo "val23 is ".is_null($val23);// 0

    // => empty(variable) VS isset(variable) 
        // Note : the following values are empty. 
        // 0 / 0.0 / "0" / "" / NULL / FALSE / []

        $val24 = [];

        if(empty($val24)){
            echo "Your variable is empty.";
        }

        if(isset($val24)){
            echo "Your variable with value.";
        }else{
            echo "Your variable without value.";
        }

    // isset() VS unset() 
        $city = "Yangon";
        $country = "Thailand";
        echo isset($city) ? "Yes" : "No"; 
        echo $city;
        echo $country;

        unset($city,$country);
        echo $city;
        echo $country;

    // -----------------------------------------------------------------------------------------------------
        

?>