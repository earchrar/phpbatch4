<?php

    // PHP String Method
    
        //=> 1.strlen(string) Function
            $words = "Save Myanmar";
            echo strlen($words);// 12

        //=> 2.str_word_count(string) Function 
        //=> 2.str_word_count(string,return) Function 

            // 0 - Default(string) 
            // 1 = Return an array 
            // 2 = Return an array 

            $text = "Save Myanmar Country";
            echo str_word_count($text);// 3

            echo str_word_count($text,0);// 3
            echo "<pre>".print_r(str_word_count($text,1),true)."</pre>"; // ( [0] => Save [1] => Myanmar [2] => Country )
            echo "<pre>".print_r(str_word_count($text,2),true)."</pre>"; // ( [0] => Save [5] => Myanmar [13] => Country )

        // => 3.ucword(string) Function => UpperCase Word 
        // => 3.ucword(string,delimiters) Function 

            $country = "welcome to myanmar country,i live in yangon";
            echo ucwords($country);// Welcome To Myanmar Country,i Live In Yangon
            echo ucwords($country."-");// Welcome To Myanmar Country,i Live In Yangon,

        // => 4.ucfirst(string) Function 

            $message = "welcome to yangon,i live in tamwe";
            echo ucfirst($message);// Welcome to yangon,i live in tamwe

        // => 5.lcfirst(string) Function 

            $msg = "welcome to yangon,i live in tamwe";
            echo lcfirst($msg);// Welcome to yangon,i live in tamwe

        // => 6.strtoupper(string) Function 
        
            $string = "welcome to my country";
            echo strtoupper($string);// WELCOME TO MY COUNTRY
        
        // => 6.strtolower(string) Function 
        
            $str = "welcome to my country";
            echo strtolower($str);// welcome to my country

        // => 7.chuck_split(string,length,delimiter) Function 

            $letters = "Myanmar Country";
            echo chunk_split($letters,1,".");// M.y.a.n.m.a.r. .C.o.u.n.t.r.y.
            echo chunk_split($letters,3,"-");// Mya-nma-r C-oun-try-

        // => 8.substr(string,start index/offset,end length) Function 

            $country = "Welcome Myanmar";
            echo substr($country,0);// Welcome Myanmar
            echo substr($country,8);// Myanmar
            echo substr($country,0,7);// Welcome
            echo substr($country,0,9);// Welcome M

        // => 9.strpos(string,find) Function  
            // 9.strrpos(string,find) Function
            // 9.stripos(string,find) Function
            // 9.strripos(string,find) Function

            $captions = "Lorem Ipsum is simply dummy text of the printing and typesetting industry Ipsum.";
            echo strpos($captions,"Ipsum");// 6 ( index number )
            echo strrpos($captions,"Ipsum");// 74 ( index number )
            echo stripos($captions,"Printing");// 40 ( index number )
            echo strripos($captions,"Ipsum");// 4 ( index number )

        // => 10.str_replace(search,replace,string) Function 

            $topic = "Save Myanmar";
            echo str_replace("Myanmar","CRPH",$topic);// Save CRPH

        // => 11.substr_replace(string,replace,start index/offset,end length) Function 
            // 11.substr_replace(string,replace,start index/offset,end length) Function 

            $greeting = "Welcome Myanmar";
            echo substr_replace($greeting,"Hello",0);// hello
            echo substr_replace($greeting,"Thailand",8);// Welcome Thailand

            echo substr_replace($greeting,"Hello",0,0);// HelloWelcome Myanmar
            echo substr_replace($greeting,"Hello",0,3);// Hellocome Myanmar
            echo substr_replace($greeting,"Hello",0,7);// Hello Myanmar

        // => 12. trim() Function 
            // => 12. trim(string,character)

            $title = " Welcome to My Country";
            echo trim($title);// Welcome to My Country

            $subtitle = "Welcome to My Country";
            echo trim($subtitle,"Wel");// come to My Country
            echo trim($subtitle,"try");// Welcome to My Coun

        // => 13. ltrim() Function 
          // => 13. ltrim(string,characters) Function 
            $sayhi = "/Migarlarpar/";
            echo $sayhi;// /Migarlarpar/
            echo ltrim($sayhi,"/");// Migarlarpar/

        // => 14. rtrim() Function 
          // => 13. rtrim(string,characters) Function 
            $sayhi = "/Migarlarpar/";
            echo $sayhi;// /Migarlarpar/
            echo rtrim($sayhi,"/");// /Migarlarpar

        // => 15. str_repeat() Function 
        // => str_repeat(string,count) Function 
            echo str_repeat("A Kyal Gyi",3);// A Kyal GyiA Kyal GyiA Kyal Gyi

        // => 16. strcmp(string1,string2) Function  (case-sensitive) 
            // 0 = if the two strings are equal 
            // < 0 => if string1 is less than string2 
            // > 0 => if string1 is greater than string2 

            echo strcmp("I Love My Job","I Love My Job");// 0
            echo strcmp("I Love My Job","I Love");// 1
            echo strcmp("I Love","I Love My Job");// -1

        // => 17. explode(separator,string,limit) Function 
            $words = "Welcome to My Country";
            echo "<pre>".print_r(explode(" ",$words),true)."</pre>";// ( [0] => Welcome [1] => to [2] => My [3] => Country )
            echo "<pre>".print_r(explode(" ",$words,0),true)."</pre>";// ( [0] => Welcome to My Country )
            echo "<pre>".print_r(explode(" ",$words,1),true)."</pre>";// ( [0] => Welcome to My Country )
            echo "<pre>".print_r(explode(" ",$words,2),true)."</pre>";// ( [0] => Welcome [1] => to My Country )
            echo "<pre>".print_r(explode(" ",$words,3),true)."</pre>";// ( [0] => Welcome [1] => to [2] => My [3] => Country )

        // => 18. implode(separator,array) Function 
            $words = ["Welcome","to","My","City"];
            echo implode(" ",$words); // Welcome to My City
            echo implode("-",$words); // Welcome-to-My-City

        // => 19. join(separator,array) Function 
            $words = ["Welcome","to","My","Village"];
            echo join(" ",$words); // Welcome to My City
            echo join("-",$words); // Welcome-to-My-City

        // => 20. number_format(number) Function 
            // number_format(number,decimals) 
            echo number_format("1000000");// 1,000,000
            echo number_format("1000000",2);// 1,000,000.00

        // => 21. stripslashes(string) Function 
            $str = "He\s my mother";
            echo $str;// He\s my mother

            $str = "He\s my mother";
            $str = stripcslashes($str);
            echo $str; // Hes my mother

        // => 22. basename(path) Function 
            // => basename(path,suffix) 

            $path = "./assent/img/cover.jpg";
            echo $path;// ./assent/img/cover.jpg
            echo basename($path);// cover.jpg
            echo basename($path,".jpg");// cover

        // => 23. pathinfo(path) Function 
            // => pathinfo(path,flags) 

            $filepath = "./assent/img/cover.jpg";
            // echo $filepath; // error Array to string 
            echo "<pre>".print_r(pathinfo($filepath))."</pre>"; // ( [dirname] => ./assent/img [basename] => cover.jpg [extension] => jpg [filename] => cover )
            echo pathinfo($filepath)["dirname"];// ./assent/img
            echo pathinfo($filepath)["filename"];// cover 

            echo pathinfo($filepath,PATHINFO_DIRNAME);// ./assent/img
            echo pathinfo($filepath,PATHINFO_BASENAME);// cover.jpg
            echo pathinfo($filepath,PATHINFO_EXTENSION);// jpg
            echo pathinfo($filepath,PATHINFO_FILENAME);// cover

    // -----------------------------------------------------------------------------------------------------------------------------------------------------------------









?>