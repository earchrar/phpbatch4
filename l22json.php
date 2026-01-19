<?php

    // PHP json 
    // json_encode(array);
    // json_decode(array);
    // json_decode(array,true);

        // Example 1
            // $colors = ["red","green","blue"];
            // // echo $colors;// Array to string
            // // var_dump($colors);// Arrayarray(3) { [0]=> string(3) "red" [1]=> string(5) "green" [2]=> string(4) "blue" }

        // Example 2 (json_encode())
            // $mycolor = json_encode($colors);
            // echo $mycolor;// ["red","green","blue"]
            // var_dump($mycolor);// string(22) "["red","green","blue"]"

            // $students = ["name"=>"aung aung","age"=>25,"city"=>"yangon"];
            // var_dump($students);// array(3) { ["name"]=> string(9) "aung aung" ["age"]=> int(25) ["city"]=> string(6) "yangon" }
            // echo $students["name"];// aung aung
            // echo $students["age"];// 25
            // echo $students["city"];// yangon

            // $studentinfos = json_encode($students);
            // echo $studentinfos;// {"name":"aung aung","age":25,"city":"yangon"}
            // var_dump($studentinfos);// string(45) "{"name":"aung aung","age":25,"city":"yangon"}"

            // can't print 
                // echo $studentinfos["name"];
                // echo $studentinfos["age"];
                // echo $studentinfos["city"];

        // => Decode by single parameter 
            // $studentdatas = '{"name":"aung aung","age":25,"city":"yangon"}';
            // $studentdecode = json_decode($studentdatas);
            // var_dump($studentdecode);// object(stdClass)#1 (3) { ["name"]=> string(9) "aung aung" ["age"]=> int(25) ["city"]=> string(6) "yangon" }

            // can print ( object(stdClass) (-> object operator) ) 
            //     echo $studentdecode->name;// aung aung
            //     echo $studentdecode->age;// 
            //     echo $studentdecode->city;

            // foreach($studentdecode as $key=>$value){
            //     echo $key . " is " . $value . "<br/>";
            // }

        // => Decode by multi parameter 
            $studentdatas = '{"name":"aung aung","age":25,"city":"yangon"}';
            $studentdecode = json_decode($studentdatas,true);
            // var_dump($studentdecode);// array(3) { ["name"]=> string(9) "aung aung" ["age"]=> int(25) ["city"]=> string(6) "yangon" }

            // can print ( object(stdClass) (-> object operator) ) 
                // echo $studentdecode->name;// aung aung
                // echo $studentdecode->age;// 25
                // echo $studentdecode->city;// yangon

            // can't print 
                // echo $studentdecode["name"];// aung aung
                // echo $studentdecode["age"];// 25
                // echo $studentdecode["city"];// yangon

            foreach($studentdecode as $key=>$value){
                echo $key . " is " . $value . "<br/>";
            }
?>