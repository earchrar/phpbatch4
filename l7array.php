<?php

    //=> Arrays
    // (i). Indexed Array (Manual) Array 
    // (ii). Associated Array 
    // (iii). Multidimensional Array 
    
    // (i). Indexed Array (Manual) Array 

        $names = array("aung aung","maung maung","zaw zaw","kyaw kyaw","tun tun");
        // echo $names; // error
        // print $names; // error 

        var_dump($names);
        print_r($names);

        $colors = ["red","green","blue","black","white"];
        // echo $colors;

        echo count($colors);// 5
        print_r($colors,false);
        echo "<pre>".print_r($colors,true)."</pre>";

        $colors["6"] = "gray";
        $colors["7"] = "stone";
        $colors["8"] = "skyblue";
        $colors["0"] = "violet";

        echo "<pre>".print_r($colors,true)."</pre>";
        echo count($colors);// 8

        echo "My fav color is ".$colors[8];

    // --------------------------------------------------------------------------------------------------

    // (ii). Associated Array 

        $news = array("pone"=>"this is post one","ptwo"=>"this is post two","pthree"=>"this is post three");
        var_dump($news);

        $medias = [
            "pone"=>"this is post one",
            "ptwo"=>"this is post two",
            "pthree"=>"this is post three"
        ];

        echo count($medias);// 3
        var_dump($medias); //

        $medias["pfour"] = "this is post four";
        $medias["pthree"] = "this is new post three";

        echo count($medias);// 3
        var_dump($medias); //

        echo "I like this post. so post title is ".$medias["pthree"]; // 

    // --------------------------------------------------------------------------------------------------

    // (iii). Multidimensional Array ( array contains one or more array )

            $paints = array(
                array("red","green","blue"),
                array("pen","pencil","ruler"),
                array("paper","plastic")
            );

            echo count($paints); // 3 
            var_dump($paints);

            $maincolors = [
                ["red","green","blue"],
                ["pen","pencil","ruler"],
                ["paper","plastic"]
            ];

            echo count($maincolors); // 3 
            var_dump($maincolors);

            echo($maincolors[0][0]); // red
            echo($maincolors[1][2]); // ruler
            echo($maincolors[2][1]); // plastic

            $persons = array(
                array("name"=>"aung aung","age"=>20),
                array("name"=>"su su","age"=>18),
                array("name"=>"nu nu","age"=>23)
            );

            $vipersons = [
                ["name"=>"aung aung","age"=>20],
                ["name"=>"su su","age"=>18],
                ["name"=>"nu nu","age"=>23]
            ];

            echo count($vipersons);// 3

            echo($vipersons[0]["name"]);// aung aung
            echo($vipersons[0]["age"]);// 20

            echo($vipersons[2]["name"]);// nu nu
            echo($vipersons[2]["age"]);//  23
    
        // --------------------------------------------------------------------------------------------------

?>