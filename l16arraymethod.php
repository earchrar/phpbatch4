<?php

    // PHP Array Method 

    // => 1.array_combine(key,value) Function 
        $name = array("aung aung","su su","kyaw kyaw","hla hla");
        $age = [30,25,35,40];

        $result = array_combine($name,$age);
        echo "<pre>".print_r($result,true)."</pre>";// ( [aung aung] => 30 [su su] => 25 [kyaw kyaw] => 35 [hla hla] => 40 )
        echo $result["kyaw kyaw"];// 35

    // => 2.count(array) Function 
        $vehicle = ["toyota","ford","audi","mazda","suzuki","ford","mazda","bmw"];
        echo count($vehicle);// 8

    // => 3.array_count_value(array) Function 
        $vehicle = ["toyota","ford","audi","mazda"];
        echo "<pre>".print_r($vehicle),true."</pre>";// ( [0] => toyota [1] => ford [2] => audi [3] => mazda )

    // => 4.array_chunk(array,length) Function
        // array_chunk(array,length,preservekey)
        // preservekey = true/false 

        $couples = ["aung aung","su su","kyaw kyaw","nu nu","tun tun","yin yin","zaw zaw","aye aye"];
        $results1 = array_chunk($couples,2);
        echo "<pre>".print_r($results1),true."</pre>";// ( [0] => Array ( [0] => aung aung [1] => su su ) [1] => Array ( [0] => kyaw kyaw [1] => nu nu ) [2] => Array ( [0] => tun tun [1] => yin yin ) [3] => Array ( [0] => zaw zaw [1] => aye aye ) )
        echo $result1[0][1];// su su
        $results2 = array_chunk($couples,2,true);
        echo "<pre>".print_r($results2),true."</pre>";// ( [0] => Array ( [0] => aung aung [1] => su su ) [1] => Array ( [2] => kyaw kyaw [3] => nu nu ) [2] => Array ( [4] => tun tun [5] => yin yin ) [3] => Array ( [6] => zaw zaw [7] => aye aye ) )
        $results2 = array_chunk($couples,2,false);
        echo "<pre>".print_r($results2),true."</pre>";// ( [0] => Array ( [0] => aung aung [1] => su su ) [1] => Array ( [0] => kyaw kyaw [1] => nu nu ) [2] => Array ( [0] => tun tun [1] => yin yin ) [3] => Array ( [0] => zaw zaw [1] => aye aye ) )

    // => 5. array_diff(array1,array2,...) Function 
        // Note: we don't need to consider any index or keyname 

        $colors1 = ["red","green","blue","pink"];
        $colors2 = ["red","blue","pink","sliver"];
        $colors3 = ["green","blue","orange","violet"];

        echo "<pre>".print_r(array_diff($colors1,$colors2)),true."</pre>";// ( [1] => green )
        echo "<pre>".print_r(array_diff($colors2,$colors1)),true."</pre>";// ( [3] => sliver )
        echo "<pre>".print_r(array_diff($colors1,$colors2,$colors3)),true."</pre>";// ()

        $col1 = ["a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow"];
        $col2 = ["e"=>"red","f"=>"green","g"=>"black"];

        echo "<pre>".print_r(array_diff($col1,$col2)),true."</pre>";// ( [c] => blue [d] => yellow )
        echo "<pre>".print_r(array_diff($col2,$col1)),true."</pre>";// ( [g] => black )

    // => 5. array_diff_assoc(array1,array2,...) Function 
        // Note: we need to consider any keyname and value ( just for assoc array )

        $col1 = ["a"=>"red","b"=>"yellow","c"=>"blue","d"=>"green"];
        $col2 = ["e"=>"red","f"=>"green","g"=>"blue"];

        echo "<pre>".print_r(array_diff_assoc($col1,$col2)),true."</pre>";// ( [a] => red [b] => green [c] => blue [d] => yellow )
        echo "<pre>".print_r(array_diff_assoc($col2,$col1)),true."</pre>";// ( [e] => red [f] => green [g] => black )

    // => 6. array_diff_key(array1,array2,...) Function 
        // Note: we need to consider any keyname ( just for assoc array )

        $col1 = ["a"=>"red","b"=>"yellow","c"=>"blue","d"=>"green","f"=>"pink"];
        $col2 = ["a"=>"red","b"=>"green","c"=>"blue","e"=>"orange"];

        echo "<pre>".print_r(array_diff_assoc($col1,$col2)),true."</pre>";// ( [b] => yellow [d] => green [f] => pink )
        echo "<pre>".print_r(array_diff_assoc($col2,$col1)),true."</pre>";// ( [b] => green [e] => orange )

    // => 7.array_intersect(array1,array2,...) Function 
        // => we don't need to consider keyname 

        $num1 =[10,20,30,60,70,80];
        $num2 = array(10,20,30,40,50,90,80);
        echo "<pre>".print_r(array_intersect($num1,$num2)),true."</pre>";// ( [0] => 10 [1] => 20 [2] => 30 [5] => 80 )
        echo "<pre>".print_r(array_intersect($num2,$num1)),true."</pre>";// ( [0] => 10 [1] => 20 [2] => 30 [6] => 80 )

        $col1 = ["a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow"];
        $col2 = ["a"=>"red","f"=>"green","d"=>"orange"];

        echo "<pre>".print_r(array_intersect($col1,$col2)),true."</pre>";// ( [a] => red [b] => green )
        echo "<pre>".print_r(array_intersect($col2,$col1)),true."</pre>";// ( [a] => red [f] => green )

    // => 8.array_fill(startindex,count,value) Function 

        echo "<pre>".print_r(array_fill(0,5,"green")),true."</pre>";// ( [0] => green [1] => green [2] => green [3] => green [4] => green )
        echo "<pre>".print_r(array_fill(2,5,"blue")),true."</pre>";// Array ( [2] => blue [3] => blue [4] => blue [5] => blue [6] => blue )

    // => 9.array_fill_keys(key,value) Function 

        $keys = ["a","b","c","d"];
        $values = ["red","green","blue","pink"];

        echo "<pre>".print_r(array_fill_keys($keys,"pink")),true."</pre>";// ( [a] => pink [b] => pink [c] => pink [d] => pink )
        echo "<pre>".print_r(array_fill_keys($keys,$values)),true."</pre>";

    // => 10.array_key_exists(key,array) Function 

        $operators = ["mpt"=>"fith","ooredoo"=>"broadbrand"];

        if(array_key_exists("mpt",$operators)){
            echo "Key exists";
        }else{
            echo "Key does not exists.";
        }

    // => 11.array_merge(array1,array2,...) Function 
        
        $arr1 = ["red","green"];
        $arr2 = array("blue","yellow");
        $arr3 = ["orange","violet"];

        echo "<pre>".print_r(array_merge($arr1,$arr2)),true."</pre>";// ( [0] => red [1] => green [2] => blue [3] => yellow )
        echo "<pre>".print_r(array_merge($arr1,$arr2,$arr3)),true."</pre>";// ( [0] => red [1] => green [2] => blue [3] => yellow [4] => orange [5] => violet )

    // => 12.array_keys(array) Function 
        // => array_keys(array,value) 
        // => array_keys(array,value,strict)

        $phones = ["mpt"=>"fifth","ooredoo"=>"broadband","telenor"=>"wifi"];

        echo "<pre>".print_r($phones),true."</pre>";// ( [mpt] => fifth [ooredoo] => broadband [telenor] => wifi )
        echo array_keys($phones)[1]; # ooredoo

        echo "<pre>".print_r(array_keys($phones,"broadband")),true."</pre>";// [0] => ooredoo
        echo array_keys($phones,"broadband")[0]; # ooredoo

        $numbers = [10,20,30,"10"];
        echo "<pre>".print_r(array_keys($numbers,"10")),true."</pre>";// ( [0] => 0 [1] => 3 )
        echo "<pre>".print_r(array_keys($numbers,10)),true."</pre>";// ( [0] => 0 [1] => 3 )

        echo "<pre>".print_r(array_keys($numbers,10,true)),true."</pre>";// ( [0] => 0 )
        echo "<pre>".print_r(array_keys($numbers,"10",true)),true."</pre>";// ( [0] => 3 )

        echo "<pre>".print_r(array_keys($numbers,10,false)),true."</pre>";// ( [0] => 0 )
        echo "<pre>".print_r(array_keys($numbers,"10",false)),true."</pre>";// ( [1] => 3 )

    // => 13.array_map(callback,array1,array2,arry3,..) Function 

        $males = ["tun tun","aung aung","kyaw kyaw","thura","zaw zaw"];
        $females = array("hla hla","su su","nu nu","yu yu","thida");

        function genderone($name){
            return ("Mr. ".$name);
        }

        function gendertwo($male,$female){
        return ($male." & ".$female);
        }

        echo "<pre>".print_r(array_map("genderone",$males),true)."</pre>";// ( [0] => Mr. tun tun [1] => Mr. aung aung [2] => Mr. kyaw kyaw [3] => Mr. thura [4] => Mr. zaw zaw )
        echo "<pre>".print_r(array_map("gendertwo",$males,$females),true)."</pre>";// ( [0] => tun tun & hla hla [1] => aung aung & su su [2] => kyaw kyaw & nu nu [3] => thura & yu yu [4] => zaw zaw & thida )

    // => 14.sort(array) 

        $cars = ["volow","bmw","toyota","mazda","suzuki"];
        sort($cars);
        echo "<pre>".print_r($cars),true."</pre>";// ( [0] => bmw [1] => mazda [2] => suzuki [3] => toyota [4] => volow )

        $numbers = [10,50,"80",90,35,"100",130,"250",70];
        sort($numbers);
        echo "<pre>".print_r($numbers),true."</pre>";// ( [0] => 10 [1] => 35 [2] => 50 [3] => 70 [4] => 80 [5] => 90 [6] => 100 [7] => 130 [8] => 250 )

    // => 15.array_multisort(array) 

        $carsbrand = ["volow","bmw","toyota","mazda","suzuki"];
        array_multisort($carsbrand);
        echo "<pre>".print_r($carsbrand),true."</pre>";// ( [0] => bmw [1] => mazda [2] => suzuki [3] => toyota [4] => volow )

        $lucknumbers = [10,50,"80",90,35,"100",130,"250",70];
        array_multisort($lucknumbers);
        echo "<pre>".print_r($lucknumbers),true."</pre>";// ( [0] => 10 [1] => 35 [2] => 50 [3] => 70 [4] => 80 [5] => 90 [6] => 100 [7] => 130 [8] => 250 )

    // => 16.array_reverse(array) 

        $vehicles = ["volow","bmw","toyota","mazda","suzuki"];
        sort($vehicles);
        echo "<pre>".print_r(array_reverse($vehicles)),true."</pre>";// ( [0] => volow [1] => toyota [2] => suzuki [3] => mazda [4] => bmw )

        $winnumbers = [10,50,"80",90,35,"100",130,"250",70];
        sort($winnumbers);
        echo "<pre>".print_r(array_reverse($winnumbers)),true."</pre>";// ( [0] => 250 [1] => 130 [2] => 100 [3] => 90 [4] => 80 [5] => 70 [6] => 50 [7] => 35 [8] => 10 )

    // => 17.array_pad(array,length,value) Function 
        
        $colors = ["red","green"];
        echo "<pre>".print_r(array_pad($colors,5,"blue")),true."</pre>";// ( [0] => red [1] => green [2] => blue [3] => blue [4] => blue )

    // => 18.array_reduce(array,callback,initial) Function 

        $nums = [10,"20",30];

        function calfun($total,$val){
            return $total += $val;
        }

        echo array_reduce($nums,"calfun",0);// 60

    // => 19.array_sum(array)

        $nums = [10,20,30,40,50];
        echo array_sum($nums);// 150

        $nums = [10,20,30,"40",-50];
        echo array_sum($nums);// 50

        $nums = ["a"=>10.2,"b"=>20.2,"c"=>30.3];
        echo array_sum($nums);// 60.7

    // => 20.array_search(value,array) Function 
        
        $myarrs = ["a","b","c","d","e"];
        echo array_search("d",$myarrs);// 3

        $myarrs = ["a"=>"red","b"=>"green","c"=>"violet","d"=>"black","e"=>"blue"];
        echo array_search("green",$myarrs);// b

    // => 21.array_pop(array) Function 
        
        $colors = ["red","green","blue"];
        array_pop($colors);
        echo "<pre>".print_r($colors,true)."</pre>";// ( [0] => red [1] => green )

    // => 22.array_shift(array) Function 
        
        $colors = ["red","green","blue"];
        array_shift($colors);
        echo "<pre>".print_r($colors,true)."</pre>";// ( [0] => green [1] => blue )

        $colors = ["a"=>"red","b"=>"green","c"=>"blue"];
        array_shift($colors);
        echo "<pre>".print_r($colors,true)."</pre>";//  ( [b] => green [c] => blue )

    // => 23.unset(array,index) Function and array_values(array)
        
        $colors = ["red","green","blue"];

        // unset($colors[1]);
        // echo "<pre>".print_r($colors,true)."</pre>";// ( [0] => red [2] => blue )

        unset($colors[1]);
        echo "<pre>".print_r(array_values($colors),true)."</pre>";// ( [0] => red [1] => blue )

        $colors = ["a"=>"red","b"=>"green","c"=>"blue","d"=>"violet","e"=>"pink"];
        echo "<pre>".print_r(array_values($colors),true)."</pre>";// ( [0] => red [1] => green [2] => blue [3] => violet [4] => pink )

        unset($colors["c"]);
        echo "<pre>".print_r(array_values($colors),true)."</pre>";// ( [0] => red [1] => green [2] => violet [3] => pink )

        $infos = ["name"=>"aung aung","age"=>20,"city"=>"yangon"];
        unset($infos["age"]);
        echo "<pre>".print_r(array_values($infos),true)."</pre>";// ( [0] => aung aung [1] => yangon )

    // => 24.array_unshift(array) Function 
        
        $colors = ["red","green","blue"];
        array_unshift($colors,"sliver","violet");
        echo "<pre>".print_r($colors,true)."</pre>";// ( [0] => sliver [1] => violet [2] => red [3] => green [4] => blue )

        $colors = ["0"=>"red","1"=>"green","2"=>"blue"];
        array_unshift($colors,"sliver","violet");
        echo "<pre>".print_r($colors,true)."</pre>";// ( [0] => sliver [1] => violet [2] => red [3] => green [4] => blue )

        $colors = ["a"=>"red","b"=>"green","c"=>"blue"];
        array_unshift($colors,"sliver","violet");
        echo "<pre>".print_r($colors,true)."</pre>";//  ( [0] => sliver [1] => violet [a] => red [b] => green [c] => blue )

    // => 25.array_push(array,value1,value2,value3) Function 
        
        $colors = ["red","green","blue"];
        array_push($colors,"sliver","violet");
        echo "<pre>".print_r($colors,true)."</pre>";// ( [0] => red [1] => green [2] => blue [3] => sliver [4] => violet )

        $colors = ["0"=>"red","1"=>"green","2"=>"blue"];
        array_push($colors,"sliver","violet");
        echo "<pre>".print_r($colors,true)."</pre>";// ( [0] => red [1] => green [2] => blue [3] => sliver [4] => violet )

        $colors = ["a"=>"red","b"=>"green","c"=>"blue"];
        array_push($colors,"sliver","violet");
        echo "<pre>".print_r($colors,true)."</pre>";//  ( [a] => red [b] => green [c] => blue [0] => sliver [1] => violet )

    // => 26.array_slice(array,offset,index) Function 
    //     => array_slice(array,offset,index,length) Function 
    //     => array_slice(array,index,preserve) Function 

        $candycolors = ["red","green","blue","yellow","pink"];

        echo "<pre>".print_r(array_slice($candycolors,0),true)."</pre>";// ( [0] => red [1] => green [2] => blue [3] => yellow [4] => pink )
        echo "<pre>".print_r(array_slice($candycolors,2),true)."</pre>";// ( [0] => blue [1] => yellow [2] => pink )

        echo "<pre>".print_r(array_slice($candycolors,0,2),true)."</pre>";// ( [0] => red [1] => green )
        echo "<pre>".print_r(array_slice($candycolors,2,2),true)."</pre>";// ( [0] => blue [1] => yellow )
        echo "<pre>".print_r(array_slice($candycolors,2,5),true)."</pre>";// ( [0] => blue [1] => yellow [2] => pink )

        echo "<pre>".print_r(array_slice($candycolors,2,5,false),true)."</pre>";// ( [0] => blue [1] => yellow [2] => pink )
        echo "<pre>".print_r(array_slice($candycolors,2,5,true),true)."</pre>";// ( [0] => blue [1] => yellow [2] => pink )

    // => 27.array_splice(array,index) Function 
    //     => array_splice(array,index,length) Function 
    //     => array_splice(array,index,length,array) Function 

        $shirtcolors = ["red","green","blue","yellow","pink"];

        echo "<pre>".print_r(array_splice($shirtcolors,0),true)."</pre>";// ( [0] => red [1] => green [2] => blue [3] => yellow [4] => pink )
        echo "<pre>".print_r(array_splice($shirtcolors,2),true)."</pre>";// ( [0] => blue [1] => yellow [2] => pink )

        echo "<pre>".print_r(array_splice($shirtcolors,0,2),true)."</pre>";// ( [0] => red [1] => green )
        echo "<pre>".print_r(array_splice($shirtcolors,2,2),true)."</pre>";// ( [0] => blue [1] => yellow )
        echo "<pre>".print_r(array_splice($shirtcolors,2,5),true)."</pre>";// ( [0] => blue [1] => yellow [2] => pink )

        $males = ["aung aung","maung maung","kyaw kyaw","zaw zaw","naung naung"];
        $females = ["su su","yu yu","nu nu"];

        // array_splice($males,0,2,$females);
        // echo "<pre>".print_r($males,true)."</pre>";// ( [0] => su su [1] => yu yu [2] => nu nu [3] => kyaw kyaw [4] => zaw zaw [5] => naung naung )

        array_splice($males,0,3,$females);
        echo "<pre>".print_r($males,true)."</pre>";// ( [0] => su su [1] => yu yu [2] => nu nu [3] => zaw zaw [4] => naung naung )

        array_splice($males,1,3,$females);
        echo "<pre>".print_r($males,true)."</pre>";// ( [0] => aung aung [1] => su su [2] => yu yu [3] => nu nu [4] => naung naung )

    // => 28.array_unique(array) Function 

        $nums = [10,20,30,50,10,30,60,70,80,10];
        // echo array_unique($nums);// error 
        echo "<pre>".print_r(array_unique($nums),true)."</pre>";// ( [0] => 10 [1] => 20 [2] => 30 [3] => 50 [6] => 60 [7] => 70 [8] => 80 )

        $colors = ["a"=>"red","b"=>"green","c"=>"blue","d"=>"red","e"=>"blue"];
        echo "<pre>".print_r(array_unique($colors),true)."</pre>";// ( [a] => red [b] => green [c] => blue )

    // => 29.array_walk(array,callbackfunction) Function 
        // => array_walk(array,callbackfunction,parameter)

        $colors =["a"=>"red","b"=>"green","c"=>"blue","d"=>"pink","e"=>"violet"];

        function myfunone($val,$key){
            echo "Key is {$key} = Val is {$val}";
        }

        array_walk($colors,"myfunone");// Key is a = Val is redKey is b = Val is greenKey is c = Val is blueKey is d = Val is pinkKey is e = Val is violet

        function myfuntwo($val,$key,$p){
            echo "Key is $key = Val is $val $p";
        }

        array_walk($colors,"myfuntwo","colour");// Key is a = Val is red colourKey is b = Val is green colourKey is c = Val is blue colourKey is d = Val is pink colourKey is e = Val is violet colour

        function myfunthree(&$val){
            return $val = "orange";
        }

        array_walk($colors,"myfunthree");
        echo "<pre>".print_r($colors,true)."</pre>";// ( [a] => orange [b] => orange [c] => orange [d] => orange [e] => orange )

    // ------------------------------------------------------------------------------------------------------------------------------------------------------



    

        
        


?>