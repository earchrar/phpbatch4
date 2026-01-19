<?php

    // => abs(number) Function 
        echo abs(32);// 32
        echo abs(-32);// 32
        echo abs(32.75);// 32.75
        echo abs(-32.75);// 32.75

    // =>  round(number) Function 
        // round(number,precision)
        echo round(32.64);// 33
        echo round(32.54);// 33
        echo round(32.44);// 32
        echo round(-32.64);// 33
        echo round(32.64325,2);// 33.64
        echo round(32.64765,2);// 33.65

    // => ceil(number) Function
        
        echo ceil(32.64);// 33
        echo ceil(32.64);// 33
        echo ceil(32.44);// 33

        // ***
        echo ceil(-32.64);// -32
        echo ceil(-32.54);// -32

    // => floor(number) Function
        
        echo floor(32.64);// 32
        echo floor(32.64);// 32
        echo floor(32.44);// 32

        // ***
        echo floor(-32.64);// -33
        echo floor(-32.54);// -33

    // => max(number) Function  

        echo max(2,4,20,6,8,10);// 10
        echo max(2,4,20,6,-40,8,10);// 20
        echo max(2,4,"100",20,6,40,8,10);// 100
        echo max(2,4,"100",20,6,-40,8,10);// 100

    // => min(number) Function  

        echo min(2,4,20,6,8,10);// 2
        echo min(2,4,20,6,-40,8,10);// -40
        echo min(2,4,"100",20,6,40,8,10);// 2
        echo min(2,4,"100",20,6,-40,8,10);// -40

    // => pow(base,exponent) Function 

        echo pow(2,4);// 16
        echo pow(3,4);// 81

    // => log(number,base) Logarithm Function 

        echo log(10,2);// 3.3219280948874
        echo log(20,2);// 4.3219280948874
        echo log(80,3);// 3.9886925350038

    // => sqrt(number) Function 

        echo sqrt(4);// 2
        echo sqrt(9);// 3
        echo sqrt(0.81);// 0.9
        echo sqrt(-4);// NAN

    // => rand() Function 
        
        echo rand();// 581585115

    // => getrandmax() Function 

        echo getrandmax();// 2147483647

    // => rand(min,max) Function

        echo rand(1000,10000);

        $users = ["aung aung","kyaw kyaw","zaw zaw","nu nu","su su","hla hal"];
        echo $users[rand(0,5)]

    // => microtime() Function  // a very short interval of time, as 0.01 million a second 
        // => microtime(true) 

        echo microtime();// 0.94272800 1768479653
        echo microtime(true);// 1768479689.4221

    // => uniqid() Function 

        echo uniqid();// 6968dbe8ef861

    // => number_format(number,decimal) Function 
        // => number_format(number,decimals,decimals-separator,thousand-separator) 

        echo number_format(1500,2);// 1,500.00
        echo number_format(1250000,2);// 1,250,000.00
        echo number_format(1250000,2,'.',',');// 1,250,000.00
        echo number_format(1250000,2,',','.');// 1.250.000,00
        echo number_format(1250000,2,'.','-');// 1-250-000.00
        echo number_format(1250000,0,'.','-');// 1-250-000

    // ------------------------------------------------------------------------------------------------------------------------------------------------------
?>