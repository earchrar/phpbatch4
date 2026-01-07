<?php

    echo ("Hello Myanmar");
    echo ('Hello Thailand');
    echo "Hello Indonesia";
    echo 'Hello Srilanka';

    echo "Hello Myanmar",'I love Myanmar';
    echo "Hello Myanmar",'I love Myanmar','Bye Bye';

    // echo ("Hello Myanmar",'I love Myanmar'); // error 

    print "Hello Myanmar";
    print ("Hello Thailand");

    print "Hello Myanmar",'I love Myanmar'; // error
    print ("Hello Myanmar",'I love Myanmar'); // error

    echo "hay";
    echo 500;
    echo '300';
    echo 456.78;
    echo true; // 1 
    echo false; // empty 
    echo null; // empty

    // Special Escape Character ( / ) 

    echo "He's my brother.";
    echo "She's my sister.";

    echo 'He\'s my brother.';
    echo 'She\'s my sister.';

    echo 'He\'s my brother. He\'s a doctor.';
    echo 'She\'s my sister. She\'s a teacher.';
?>

<!-- 
    l1intro.php 
    1. Ouput System
        echo / print 
        echo (""(or)'') / "",'' /  print => mutil line (,) / print () => mutil line error
        print (""(or)'') / "",'' /  print => mutil line error
        php => false mean = empty 
        php => true mean = 1 
        php => null mean = empty
        php => 500 mean = (number = 500)
        php => 4567.89 mean = (digit = 456.78)


    2. Special Escape Character ( \ ) 
        echo ( \ )
            Example 1
                echo 'He\'s my brother.';
                echo 'She\'s my sister.';

            Example 2 
                echo 'He\'s my brother. He\'s a doctor.';
                echo 'She\'s my sister. She\'s a teacher.'; 
        
-->

