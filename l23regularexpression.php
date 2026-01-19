<?php

    $String = "We are family";
    echo $String;

    // preg_matc((delimiter)patthen,string);

        $result = preg_match("/We are family/",$String);// true
        $result = preg_match("/family/",$String);// true
        $result = preg_match("/Family/",$String);// false 
        $result = preg_match("/mily/",$String);// true 

        $result = preg_match("/mily$/",$String);// true 
        $result = preg_match("/family$/",$String);// true 
        $result = preg_match("/Family$/",$String);// false 
        $result = preg_match("/are$/",$String);// false 
        $result = preg_match("/we/",$String);// false 

        $result = preg_match("/^mily/",$String);// false 
        $result = preg_match("%^are%",$String);// false 
        $result = preg_match("#^we#",$String);// false
        $result = preg_match("/^We/",$String);// true

        $result = preg_match("/^we/",$String);// false 
        $result = preg_match("/^we/i",$String);// true
        $result = preg_match("/^We/i",$String);// true

        $result = preg_match("/[b-d]/",$String);// false
        $result = preg_match("/[a-f]/",$String);// true 
        $result = preg_match("/[a-z]/",$String);// true
        $result = preg_match("/[A-Z]/",$String);// true 
        $result = preg_match("/[0-4]/",$String);// false

        $String = "my luckly number is 567";

        $result = preg_match("/[0-4]/",$String);// false
        $result = preg_match("/[5-9]/",$String);// true
        $result = preg_match("/[a-z]/",$String);// true 
        $result = preg_match("/[A-Z]/",$String);// false
        $result = preg_match("/[A-Z]|[a-z]/",$String);// true 
        $result = preg_match("/^[a-z]/",$String);// true
        $result = preg_match("/[a-z]$/",$String);// false 
        $result = preg_match("/^[5-9]/",$String);// false 
        $result = preg_match("/[5-9]$/",$String);// true

        $result = preg_match("/@/",$string);// true
        $result = preg_match("/m/",$string);// true
        $result = preg_match("/m+/",$string);// true 
        $result = preg_match("/b+/",$string);// false
        $result = preg_match("/b+/",$string);// false
        $result = preg_match("/b*/",$string);// true
        $result = preg_match("/b?/",$string);// true

        $result = preg_match("/m{1}/",$string);// true 
        $result = preg_match("/m{2}/",$string);// false

        $string = "adminn@gamil.com";
        $result = preg_match("/n{1}/",$string);// true 
        $result = preg_match("/n{2}/",$string);// true 
        $result = preg_match("/n{3}/",$string);// false 
        $result = preg_match("/n{2,3}/",$string);// true 
        $result = preg_match("/n{2,}/",$string);// true 
        $result = preg_match("/\s/",$string);// false 

        $string = "V8 Engine";
        $result = preg_match("/\s/",$string);// true 
        $result = preg_match("/\d/",$string);// true 
        $result = preg_match("/\D/",$string);// true 
        $result = preg_match("/\w/",$string);// true 
        $result = preg_match("/\W/",$string);// true 

        $string = "528";
        $result = preg_match("/\d/",$string);// true 
        $result = preg_match("/\D/",$string);// false 
        $result = preg_match("/\w/",$string);// true
        $result = preg_match("/\W/",$string);// false

        $string = "admin@gmail.com";
        $result = preg_match("/a\wm/",$string);// true 
        $result = preg_match("/a\w{1}m/",$string);// true 
        $result = preg_match("/a\w{2}m/",$string);// false , cuz any exact 2 words  // adbmin@gmail.com
        $result = preg_match("/a\w{2,4}m/",$string);// false , cuz any exact 2 to 4 words  // adbcdmin@gmail.com
        $result = preg_match("/a\w{2,}m/",$string);// false, cuz any exact 2 to more words  // adbcdefgmin@gmail.com

        $result = preg_match("/a.m/",$string);// true 
        $result = preg_match("/a..m/",$string);// false  // adbmin@gmail.com
        $result = preg_match("/a.{1}m/",$string);// true 
        $result = preg_match("/a.{2}m/",$string);// false // adbmin@gmail.com 
        $result = preg_match("/a.{2,4}m/",$string);// false // adbcdmin@gmail.com
        $result = preg_match("/a.{2,}m/",$string);// false // adbcdefgmin@gmail.com

        $string = "Vv";
        $result = preg_match("/.{2}/",$string);// true 
        $result = preg_match("/.{2}$/",$string);// true , exact any 2 characters

        $string = "Welcome to our <i>programming class</i>";
        $result = preg_match("/<i><\/i>/",$string);// false 
        $result = preg_match("/<i>\w<\/i>/",$string);// false , cuz one chars 
        $result = preg_match("/<i>\w*<\/i>/",$string);// false , cuz contained space
        $result = preg_match("/<i>.<\/i>/",$string);// false
        $result = preg_match("/<i>.*<\/i>/",$string);// true
        $result = preg_match("/<i>(.*)<\/i>/",$string);// true

        $string = "admin@gmail.net";
        $result = preg_match("%^[a-z,A-Z]+@[a-z]+\.\w{3}%",$string);// true

    // preg_replace(pattern,replacement,string)

        $string = "i love PHP";
        $result = preg_replace("/php/","javascript",$string);// i love PHP
        $result = preg_replace("/php/i","javascript",$string);// i love javascript

        $string = "Are you ready to learn PHP Framework";
        $result = preg_replace("/php/","javascript",$string);// Are you ready to learn PHP Framework
        $result = preg_replace("/php/i","javascript",$string);// Are you ready to learn javascript Framework
        $result = preg_replace("/\s/i","",$string);// AreyoureadytolearnPHPFramework

        $string = "Are you ready to learn PHP Framework";
        $result = preg_replace(["/php/","/framework/"],["Javascript","libraries"],$string);// Are you ready to learn PHP Framework
        $result = preg_replace(["/php/i","/framework/"],["Javascript","libraries"],$string);// Are you ready to learn Javascript Framework

        $string = "My Luckly number is 007 but i got ticket number 5700";
        $result = preg_replace("/[0-9]/","x",$string);// My Luckly number is xxx but i got ticket number xxxx
        $result = preg_replace("/[0-9]+/","x",$string);// My Luckly number is x but i got ticket number x

        // Bracket Expression 

            $string = "admin123@gmail .com";
            $result = preg_replace("/[[:space:]]/",",",$string);// admin123@gmail,.com
            $result = preg_replace("/[[:space:]]/","x",$string);// admin123@gmailx.com
            $result = preg_replace("/[[:alpha:]]/","x",$string);// xxxxx123@xxxxx .xxx
            $result = preg_replace("/[[:digit:]]/","x",$string);// adminxxx@gmail .com
            $result = preg_replace("/[[:alnum:]]/","x",$string);// xxxxxxxx@xxxxx .xxx
            $result = preg_replace("/[[:punct:]]/","x",$string);// admin123xgmail xcom

            $string = "Admin123@gmail .Com";
            $result = preg_replace("/[[:lower:]]/","x",$string);// Axxxx123@xxxxx .Cxx
            $result = preg_replace("/[[:upper:]]/","x",$string);// xdmin123@gmail .xom

        echo $result;

                        // no limit = 0 (or) NULL 
    // preg_split(pattern,string,limit,flags)

        $string = "My lucky number is 007";
        $result = preg_split("/\s/",$string);
        echo $result;// error , Array to string conversion 
        echo "<pre>".print_r($result,true)."</pre>";
        echo $result[0];// My
        echo $result[4];// 007

        $result = preg_split("/\s/",$string,2);
        echo "<pre>".print_r($result,true)."</pre>";
        echo $result[0];// My
        echo $result[4];// lucky number is 007

        $string = "My Luckly number is 007 but i got ticket number 5700";
        $result = preg_split('/\s/',$string);
        $result = preg_split('/[\s]/',$string);
        $result = preg_split('/\s,/',$string);// [0] => My Luckly number is 007 but i got ticket number 5700

        $result = preg_split('/\s,/',$string,NULL,PREG_SPLIT_NO_EMPTY);
        $result = preg_split('/\s,/',$string,0,PREG_SPLIT_NO_EMPTY);
        $result = preg_split('//',$string);
        $result = preg_split('//',$string,NULL,PREG_SPLIT_NO_EMPTY);
        $result = preg_split('//',$string,0,PREG_SPLIT_NO_EMPTY);

        echo "<pre>".print_r($result,true)."</pre>";

    // preg_quote(string,delimiter)

        $string = "He\'s my father, do you know him ?";
        $result = preg_quote($string);// He\\'s my father, do you know him \?
        $result = preg_quote($string,"o");// He\\'s my father, d\o y\ou kn\ow him \?

    // preg_match_all(pattern,string,match/return,flags) 

        $string = "Winning numbers are 227-000 & 002-777 , but my ticket number are 007-222 & 1122233";

        preg_match_all("/\d+-\d+/",$string,$result,PREG_SET_ORDER);
        preg_match_all("/\d+-\d+/",$string,$result,PREG_PATTERN_ORDER);

        echo $result;// error , Array to string conversion 
        echo "<pre>".print_r($result,true)."</pre>";

    // Lookahead & Lookbehind 
    
        // (?=) positive lookahead (or) regax lookahead = left hand side
        // (?<=) positive lookahead (or) regax lookahead = right hand side

        // (?!) positive lookahead (or) regax lookahead = left hand side
        // (?<!) positive lookahead (or) regax lookahead = right hand side

        $string = "aungkyaw@cisco.com";
        $result = preg_match("/@(?=cisco)/",$string);// true (positive lookahead) 
        $result = preg_match("/(?<=@)cisco/",$string);// true (positive lookbehind)

        $result = preg_match("/@(?!cisco)/",$string);// false (negative lookahead) 
        $result = preg_match("/(?<!@)cisco/",$string);// false (negative lookbehind)

        echo $result;

        
?>


<!-- 

    $ must be in end (case sensitive)
    ^ must be in start  (case sensitive) , caret or cirumflex, shift+6 
    i no case sensitive 
    [] range [a-z] [A-Z] [0-9]
    m+ must contains at leaset one m and more 
    m* can contain m or not and more 
    m? can contain m or not and more 
    m{nth} contain (same place or couple place) m as per nth and more 
    m{nth,nth} contain (same place or couple place) m as per nth and more 
    m{nth,} contain (same place or couple place) m as per nth and more 

    \s space Character
    \d digit Character
    \D no digit Character
    \w word [a-z] [A-Z] [0-9] Character
    \W any word Special Escape Character
    . any character 
    () this 
    + must or can
    p() hp* can be contain hp
    p(hp) + must  

    [[:space:]] space Character 
    [[:alpha:]] alphabetic Character 
    [[:digit:]] digit Character 
    [[:alnum:]] alphanumeric 
    [[:punct:]] puncturation 
    [[:lower:]] lower-case 
    [[:upper:]] upper-case 

-->


<!-- 
    Local Computer       

    apache install 
    php install 
    mysql install 

    Os 
    1 Windows 
    2 Linux 

    0s 
    1 Windows 
        xmapp       apache/php/mysql/filezila/mailserver 
        warmp       apache/php/mysql/filezila/mailserver 

            windows system 32x86/64
            windows version 7 10 11 
            application 

    2. Linux 
        lamp 

        apache 
        php
        mysql 

        cpanel 

        wordpress 
        wix  
    
-->



