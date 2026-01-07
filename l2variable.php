<?php 
    
    // javascript code 
    // let fullname = "aung aung";
    // console.log(fullname);  

    // php code 
    $fullname = "U Kyaw Kyaw";
    $job = "Developer";

    echo $fullname; // U Kyaw Kyaw
    print $job; // Developer

    echo "$fullname"; // U Kyaw Kyaw
    print '$job'; // $job

    echo "My name is $fullname";// My name is U Kyaw Kyaw
    echo 'My name is $fullname';// My name is $fullname
    echo "My name is ${fullname}";// My name is U Kyaw Kyaw
    echo "My name is {$fullname}";// My name is U Kyaw Kyaw

    echo 'My name is ${fullname}';// My name is $fullname
    echo 'My name is {$fullname}';// My name is $fullname

    echo "He\'s my father, he is a $job"; // He\'s my father, he is a Developer
    echo "He\'s my father, he is a \$job";// He\'s my father, he is a $job
    echo 'He\'s my father, he is a $job';// He's my father, he is a $job
    echo "He\'s my father, he is a ${job}";// He\'s my father, he is a Developer
    echo "He\'s my father, he is a \${job}";// He\'s my father, he is a ${job}
    echo "He\'s my father, he is a \{$job}";// He\'s my father, he is a \{Developer}


    $gender = echo "female"; // error 
    $nation = print "burma"; // burma 

    // => Concat (.) 
    $firstname = "Aung";
    $lastname = "Kyaw Kyaw";

    echo $firstname;// Aung
    echo $lastname;// Kyaw Kyaw

    echo $firstname.$lastname; // AungKyaw Kyaw
    echo $firstname.' '.$lastname;// Aung Kyaw Kyaw

    // Comments 
    # Single Line Comment 

    // Multi Line Comment 
    // comment 1 
    // comment 2 
    // comment 3
?>

<!-- 
    L2variable.php
    => $ (variable name is = $)
        => eg. $car = "Toyota";
            $wheel = 5;

            => Method 1 ( Output )          
                    echo $car;
                    echo $wheel;

            => Method 2 ( Output )
                    echo "$car";
                    echo "$wheel";

    => Difference echo and print 
        eg. echo => $guess = echo "5"; // error 
        eg. print => $guess = print "5"; // working

    => Concat (.)
        Eg. $first = "R"; $last = "Zar Ni";
            eg. echo $first.$last;
                echo $first.' '.$last;

    => Comment 
        php comment 
            Single Line Comment => # (or) // 
            Multi Line Comment => /**/ 
            
-->