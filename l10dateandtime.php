<?php

    // 1 Jan 1970

    date_default_timezone_set("Asia/Yangon");

    // Date 
        $getdate = getdate(); 
        // echo $getdate; // error 
        var_dump($getdate); 
        // array(11) {
        //     ["seconds"]=>
        //     int(8)
        //     ["minutes"]=>
        //     int(9)
        //     ["hours"]=>
        //     int(2)
        //     ["mday"]=>
        //     int(5)
        //     ["wday"]=>
        //     int(1)
        //     ["mon"]=>
        //     int(1)
        //     ["year"]=>
        //     int(2026)
        //     ["yday"]=>
        //     int(4)
        //     ["weekday"]=>
        //     string(6) "Monday"
        //     ["month"]=>
        //     string(7) "January"
        //     [0]=>
        //     int(1767578948)
        // }
        echo "<pre>".print_r($getdate,true)."</pre>"; 
        // (
        //     [seconds] => 20
        //     [minutes] => 54
        //     [hours] => 8
        //     [mday] => 5
        //     [wday] => 1
        //     [mon] => 1
        //     [year] => 2026
        //     [yday] => 4
        //     [weekday] => Monday
        //     [month] => January
        //     [0] => 1767579860
        // )
        $getdate = getdate(); 

        // seconds / minutes / hours
            echo "This is seconds = ".$getdate["seconds"];
            echo "This is minutes = ".$getdate["minutes"];
            echo "This is hours = ".$getdate["hours"];

        // weekday / wday / yday
            echo "This is weekday = ".$getdate["weekday"];// Monday
            echo "This is wday = ".$getdate["wday"]; // 0 = sun 1 = mon
            echo "This is yday = ".$getdate["yday"];// 64 day of the year

        // month / mon / mday
            echo "This is wday = ".$getdate["month"]; // January
            echo "This is yday = ".$getdate["mon"];// 1 // day of month
            echo "This is yday = ".$getdate["mday"];// 5

            echo "This is year = ".$getdate["year"];// 2026

        // time 
            $time = time();
            echo "This is 0 = ".$time;// 1767579648

        // https://www.php.net/manual/en/timezones.asia.php

    // -------------------------------------------------------------------

    // DATE / TIME Format 
        // date(format,timestamp) 

        date_default_timezone_set("Asia/Yangon");
        $getdate = getdate();
        echo "<pre>".print_r($getdate)."</pre>";

        // a = am , pm , A = AM , PM 
            $date = date("a",$time);
            echo "This is format a = ".$date; // am , pm

            $date = date("A",$time);
            echo "This is format A = ".$date; // AM , PM

        // d = 05 day leading zero , pm , D = Mon
            $date = date("d",$time);
            echo "This is format d = ".$date; // 05 day leading zero

            $date = date("D",$time);
            echo "This is format D = ".$date; // Mon

        // F = January
            $date = date("F",$time);
            echo "This is format F = ".$date; // January

        // g = hours no leading zero 12hr
            $date = date("g",$time);
            echo "This is format g = ".$date; // 9 hours no leading zero 12hr

            $date = date("G",$time);
            echo "This is format G = ".$date; // 9 hours no leading zero 24hr

        // h = hours leading zero 12hr
            $date = date("h",$time);
            echo "This is format h = ".$date; // 09 hours leading zero 12hr

            $date = date("H",$time);
            echo "This is format H = ".$date; // 09 hours leading zero 24hr

        // l = Monday
            $date = date("l",$time);
            echo "This is format l = ".$date; // Monday

        // m = day of month leading zero
            $date = date("m",$time);
            echo "This is format m = ".$date; // 1 day of month leading zero

            $date = date("M",$time);
            echo "This is format M = ".$date; // Jan day of month leading zero

        // n = day of month no leading 0
            $date = date("n",$time);
            echo "This is format n = ".$date; // 1 day of month no leading 0

        // r = Mon, 05 Jan 2026 02:40:03 +0000
            $date = date("r",$time);
            echo "This is format r = ".$date; // Mon, 05 Jan 2026 02:40:03 +0000

        // s = seconds
            $date = date("s",$time);
            echo "This is format s = ".$date; // 46 seconds

        // U = times = 1767580895
            $date = date("U",$time);
            echo "This is format U = ".$date; // 1767580895

        // y = 26 shortcode
            $date = date("y",$time);
            echo "This is format y = ".$date; // 26

        // Y = 2026
            $date = date("Y",$time);
            echo "This is format Y = ".$date; // 2026
        
    // -------------------------------------------------------------------------------------

?>