<?php

    // => PHP Loops 
    // for 
    // forEach 
    // while 
    // dowhile

    $colorsomes = ["red","green","blue","white","black","gray","pink"]; // indexed array
    echo count($colorsomes);// 7
    var_dump($colorsomes); 

    // array_keys
    $coloroneskey = array_keys($colorsomes);
    echo ($coloroneskey);

    // 1. For Loop [array]
			// 		start        end        ? 
			// for(stm1;stm2;stm3){
			// 	code to be executed;
			// }

    for($i = 0; $i < count($colorsomes);$i++){
        echo $i;// 0 to 6

        // echo "This is indexed array or manual array by forloop = index key is ".$i ." and value is ".$colorsomes[$i];

        echo "This is indexed array or manual array by forloop = index key is ".$colorsomes[$i] ." and value is ".$i;
    }

    //=> forEach 
    // => Syntax
    // => foreach(value as key)
    foreach($colorsomes as $colorsome){
        echo "This is indexed array or manual array by foreach = ".$colorsome;
    }

    foreach($colorsomes as $key=>$colorsome){
        echo $key; // 0 to 6
        echo "This is indexed array or manual array by foreach = index key is ".$key ." and value is ".$colorsome;
    }

    // => while 
    // => Syntax
    // while(condition){
    //     code to be executed;
    // }

    $coloroneskey = array_keys($colorsomes);
    echo ($coloroneskey);

    $x = 0;
    while($x < count($colorsomes)){
        // echo $colorsomes[$x];

        // echo "This is indexed array or manual array by foreach = index key is ".$x ." and value is ".$colorsomes[$x];

        echo "This is indexed array or manual array by foreach = index key is ".$coloroneskey[$x] ." and value is ".$colorsomes[$x];

        $x++;

    }

    // => while 
    // => Syntax
    // do{
    //     code to be executed;
    // }while(condition);

    $coloroneskey = array_keys($colorsomes);
    echo ($coloroneskey);

    $y = 0;
    do{
        // echo "This is indexed array or manual array by foreach = index key is ".$y ." and value is ".$colorsomes[$y];

        echo "This is indexed array or manual array by foreach = index key is ".$coloroneskey[$y] ." and value is ".$colorsomes[$y];
        $y++;
    }while($y < count($colorsomes));



?>